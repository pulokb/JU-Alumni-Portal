<?php

namespace App\DataTables;

use App\Models\JobDetails;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use DataTables;
use Str;

class JobDetailsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTableValue()
    {
        $rows = JobDetails::latest()->where('status', '!=', 'Request')->with('user')->get();
        return DataTables::of($rows)
            ->addIndexColumn()
            ->addColumn('file', function (JobDetails $row) {
                return "<a download href='" . asset('files/' . $row->file) . "'>Download</a>";
            })
            ->addColumn('posted_by', function (JobDetails $row) {
                return $row->user->name ?? 'Admin';
            })
            ->addColumn('details', function (JobDetails $row) {
                return Str::limit($row->details, 100);
            })
            ->rawColumns(['details', 'action', 'file'])
            ->addColumn('action', 'admin.job_details.datatables_actions')
            ->make(true);
    }
    public function requestDataTableValue()
    {
        $rows = JobDetails::latest()->where('status', 'Request')->with('user')->get();
        return DataTables::of($rows)
            ->addIndexColumn()
            ->addColumn('file', function (JobDetails $row) {
                return "<a download href='" . asset('files/' . $row->file) . "'>Download</a>";
            })
            ->addColumn('posted_by', function (JobDetails $row) {
                return $row->user->name ?? 'Admin';
            })
            ->addColumn('details', function (JobDetails $row) {
                return Str::limit($row->details, 100);
            })
            ->rawColumns(['details', 'action', 'file'])
            ->addColumn('action', 'admin.job_details.datatables_actions')
            ->make(true);
    }



    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'admin.job_details.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\JobDetails $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(JobDetails $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                "dom" => '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
                'stateSave' => true,
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'Sl', 'title',
            'details',
            'posted_by',
            'status',
            'file'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'job_details_datatable_' . time();
    }
}

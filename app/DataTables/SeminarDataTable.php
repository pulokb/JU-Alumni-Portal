<?php

namespace App\DataTables;

use App\Models\Seminar;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use DataTables;
use Str;

class SeminarDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTableValue()
    {
        $rows = Seminar::latest()->get();
        return DataTables::of($rows)
            ->addIndexColumn()
            // ->addColumn('file',function(TwentyFive $row){
            //     return "<a download href='".asset('files/'.$row->file)."'>Download</a>";
            // })
            // ->addColumn('image', function (Seminar $row) {
            //     return "<img height='50px' width='50px' src='" . asset('images/' . $row->image) . "'/>";
            // })
            ->addColumn('seminar_date', function (Seminar $row) {
                return $row->seminar_date->toFormattedDateString();
            })
            ->addColumn('seminar_time', function (Seminar $row) {
                return date('h:i A',strtotime($row->seminar_time));
            })
            ->addColumn('details', function (Seminar $row) {
                return Str::limit($row->details, 100);
            })
            ->rawColumns(['details', 'action', 'image', 'file'])
            ->addColumn('action', 'admin.seminars.datatables_actions')
            ->make(true);
    }

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'admin.seminars.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Seminar $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Seminar $model)
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
            'seminar_date',
            'seminar_time',
            'place',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'seminars_datatable_' . time();
    }
}

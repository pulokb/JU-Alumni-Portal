<?php

namespace App\DataTables;

use App\Models\Scholarship;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use DataTables;
use Str;

class ScholarshipDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
     public function dataTableValue()
    {
        $rows = Scholarship::latest()->get();
        return DataTables::of($rows)
            ->addIndexColumn()
            // ->addColumn('file',function(TwentyFive $row){
            //     return "<a download href='".asset('files/'.$row->file)."'>Download</a>";
            // })
            // ->addColumn('image',function(Scholarship $row){
            //     return "<img height='50px' width='50px' src='".asset('images/'.$row->image)."'/>";
            // })
            ->addColumn('details',function(Scholarship $row){
                return Str::limit($row->details,100);
            })
            ->addColumn('status',function(Scholarship $row){
                $open = "<span style='color:green'>Open</span>";
                $close = "<span style='color:red'>Close</span>";
                return $row->status ? $open : $close;
            })
            ->rawColumns(['details','action','image','file','status'])
            ->addColumn('action', 'admin.scholarships.datatables_actions')
            ->make(true);
    }
    
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'admin.scholarships.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Scholarship $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Scholarship $model)
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
            'Sl','title',
            'details',
            'status'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'scholarships_datatable_' . time();
    }
}

<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('checkbox'  , 'admin.users.btn.checkbox')
            ->addColumn('edit'      , 'admin.users.btn.edit')
            ->addColumn('delete'    , 'admin.users.btn.delete')
            ->addColumn('active'    , 'admin.users.btn.active')
            ->rawColumns([
                'edit',
                'delete' ,
                'checkbox' ,
                'active',
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return User::orderBy('id','desc')->get();
    }

    public static function lang()
    {
        $jsonLang = [
            'sProcessing' => trans('admin.sProcessing'),
            'sLengthMenu' => trans('admin.sLengthMenu'),
            'sZeroRecords' => trans('admin.sZeroRecords'),
            'sEmptyTable' => trans('admin.sEmptyTable'),
            'sInfo' => trans('admin.sInfo'),
            'sInfoEmpty' => trans('admin.sInfoEmpty'),
            'sInfoFiltered' => trans('admin.sInfoFiltered'),
            'sInfoPostFix' => trans('admin.sInfoPostFix'),
            'sSearch' => trans('admin.sSearch'),
            'sUrl' => trans('admin.sUrl'),
            'sInfoThousands' => trans('admin.sInfoThousands'),
            'sLoadingRecords' => trans('admin.sLoadingRecords'),

            'oPaginate' => [
                'sFirst' => trans('admin.sFirst'),
                'sLast' => trans('admin.sLast'),
                'sNext' => trans('admin.sNext'),
                'sPrevious' => trans('admin.sPrevious'),
            ],
            
            'oAria' => [
                 'sSortAscending' => trans('admin.sSortAscending'),
                'sSortDescending' => trans('admin.sSortDescending'),
            ]
           

        ];

        return $jsonLang;
        
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
                    //->addAction(['width' => '80px'])
                    // ->parameters($this->getBuilderParameters());
                    ->parameters([
                        // 'dom'           => 'Blfrtip',
                        'lengthMenu'    => [[10,25,50,100],[10,25,50,trans('admin.allRecord')]], // title and limit
                        'buttons'       => [
                            
                            ['text' => '<i class="icon-trash" alt="Delete All"></i>','className' => 'btn btn-default btn-space btn-space-bottom  deleteBtnHideen' ],
                        ],
                        
                        'language' => datatableLang(),
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
            [
                'name'  => 'checkbox',
                'data'  => 'checkbox',
                'title' => '<input type="checkbox" class="check-all" onclick="checkAll()"/>',
                'exportable'    => false,
                'printable'     => false,
                'orderable'     => false,
                'searchable'    => false,
            ],
           
            [
                'name'  => 'id',
                'data'  => 'id',
                'title' => '#',
            ],
            [
                'name'  => 'first_name',
                'data'  => 'first_name',
                'title' => 'الأسم '
            ],
            
            [
                'name'  => 'email',
                'data'  => 'email',
                'title' => 'البريد الألكترونى'
            ],
            [
                'name'  => 'telephone',
                'data'  => 'telephone',
                'title' => 'الهاتف'
            ],
            
            [
                'name'  => 'active',
                'data'  => 'active',
                'title' => trans('admin.active')
            ],
            [
                'name'  => 'created_at',
                'data'  => 'created_at',
                'title' => 'تاريخ التسجيل',
            ],
            [
                'name'          => 'edit',
                'data'          => 'edit',
                'title'         => trans('admin.edit'),
                'exportable'    => false,
                'printable'     => false,
                'orderable'     => false,
                'searchable'    => false,
            ],
            [
                'name'          => 'delete',
                'data'          => 'delete',
                'title'         => trans('admin.delete'),
                'exportable'    => false,
                'printable'     => false,
                'orderable'     => false,
                'searchable'    => false,
            ],
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'User_' . date('YmdHis');
    }
}

<?php

namespace Webkul\ServiceIT\DataGrids\Admin;

use DateTime;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class ServiceITDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('service_it')->select(
            'id',
            'name',
            'price',
            'description',
            'duration',
            'status'
        );
        return $queryBuilder;
    }
    /**
     * Prepare columns.
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index' => 'id',
            'label' => trans('serviceit::app.admin.datagrid.id'),
            'type' => 'integer',
            'searchable' => false,
            'sortable' => true,
            'filterable' => false
        ]);
        $this->addColumn([
            'index' => 'name',
            'label' => trans('serviceit::app.admin.datagrid.name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);
        $this->addColumn([
            'index' => 'price',
            'label' => trans('serviceit::app.admin.datagrid.price'),
            'type' => 'integer',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);
        $this->addColumn([
            'index' => 'duration',
            'label' => trans('serviceit::app.admin.datagrid.duration'),
            'type' => 'datetime',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true]);

        $this->addColumn([
            'index' => 'status',
            'label' => trans('serviceit::app.admin.datagrid.status'),
            'type' => 'boolean',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
            'filterable_type' => 'dropdown',
            'filterable_options' => [
                [
                    'label' => 'Active',
                    'value' => true
                ],

                [
                    'label' => 'Deactive',
                    'value' => false
                ],

            ],
            'closure' => function($row) { return "<span class='badge label-info'>".($row->status ? 'Active' : 'Deactive')."</span>"; }

        ]);

    }

    /**
     * Prepare actions.
     */
    public function prepareActions() {
        $this->addAction([
            'icon' => 'icon-edit',
            'title' => 'Edit',
            'method'=> 'GET',
            'url' => function($row){ return route('admin.serviceit.edit', $row->id);}
        ]);
        $this->addAction([
            'icon' => 'icon-delete',
            'title' => 'Delete',
            'method'=> 'DELETE',
            'url' => function($row){ return route('admin.serviceit.delete', $row->id);}
        ]);
        $this->addAction([
            'icon' => 'icon-view',
            'title' => 'Show',
            'method'=> 'GET',
            'url' => function($row){ return route('admin.serviceit.show', $row->id);}
        ]);
    }

    /**
     * Prepare mass actions.
     */
    public function prepareMassActions() {
        //  $this->addMassAction([
        //     'icon' => 'icon-delete',
        //     'title' => 'Delete Selected',
        //     'method'=> 'POST',
        //     'url' => function($row){ return  route('admin.serviceit.show', $row->id);}
        // ]);
    }
}

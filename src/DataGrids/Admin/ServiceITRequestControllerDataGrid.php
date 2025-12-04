<?php

namespace Webkul\ServiceIT\DataGrids\Admin;

use DateTime;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;
use Webkul\ServiceIT\Enums\ServiceStatus;
use Webkul\ServiceIT\Models\ServiceItRequest;

class ServiceITRequestControllerDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = ServiceItRequest::with('customer', 'service_it')->getQuery();
        return $queryBuilder;
    }
    /**
     * Prepare columns.
     */
    /**
     * Prepare the columns for the Service IT Request data grid.
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index' => 'customer_id_service',
            'label' => trans('serviceit::app.admin.datagrid.request.customer'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false,
            // 'closure' => function($row) { return "<a href='".route('admin.customers.customers.review.index',$row->customer->id)."'>".ucfirst($row->customer->name)."</a>"; }
        ]);
        $this->addColumn([
            'index' => 'id_service_it',
            'label' => trans('serviceit::app.admin.datagrid.service_it'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false,

            // 'closure' => function($row) { return "<a href='".route('admin.serviceit.show',$row->service_it->id)."'>".ucfirst($row->service_it->name)."</a>"; }

        ]);
        $this->addColumn([
            'index' => 'order_id',
            'label' => trans('serviceit::app.admin.datagrid.order_id'),
            'type' => 'integer',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);
        $this->addColumn([
            'index' => 'notes',
            'label' => trans('serviceit::app.admin.datagrid.notes'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false,
            // 'closure' => function($row) { return  substr($row->notes, 0, 30).'...'; }
        ]);
        $this->addColumn([
            'index' => 'delivery_date',
            'label' => trans('serviceit::app.admin.datagrid.delivery_date'),
            'type' => 'datetime',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true]);

        $this->addColumn([
            'index' => 'status',
            'label' => trans('serviceit::app.admin.datagrid.status'),
            'type' => 'string',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
            'filterable_type' => 'dropdown',
            'filterable_options' => [
                [
                    'label' => 'Pending',
                    'value' => 'pending',
                ],

                [
                    'label' => 'Approved',
                    'value' => 'approved',
                ],
                [
                    'label' => 'Rejected',
                    'value' => 'rejected',
                ],
            ],
            // 'closure' => function($row) { return "<span class='badge ".($row->status == ServiceStatus::Pending ?
            //     'label-info':
            //     $row->status == ServiceStatus::Approved ? 'label-success' :'label-worning')."'>".($row->status)."</span>"; }

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
            'url' => function($row){ return route('admin.serviceitRequest.edit', $row->id);}
        ]);
        $this->addAction([
            'icon' => 'icon-delete',
            'title' => 'Delete',
            'method'=> 'DELETE',
            'url' => function($row){ return route('admin.serviceitRequest.delete', $row->id);}
        ]);
        $this->addAction([
            'icon' => 'icon-view',
            'title' => 'Show',
            'method'=> 'GET',
            'url' => function($row){ return route('admin.serviceitRequest.show', $row->id);}
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

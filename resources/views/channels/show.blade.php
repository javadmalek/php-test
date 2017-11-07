@extends('../layouts.purchaser-dashboard')
@section('page-title','Profile')

@section('content')
    <div class="m-content">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon">
                                    <i class="flaticon-diagram"></i>
                                </span>
                                <h3 class="m-portlet__head-text m--font-brand">
                                    {{ $channel->title }}
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <a class="btn m-btn--square  btn-outline-accent pull-right"
                               href="{{ URL::to('purchaser/channels/'.$channel->id.'/rfqs/create/') }}">Create a new RFQ</a>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        {{ $channel->description }}
                        <div style="width: 50%; text-align: left;margin-top: 16px">
                            <div class="m-widget12 m--margin-top-10" >
                                <div class="m-widget12__item">
                                <span class="m-widget12__text1">Sector<br>
                                    <span>Metal</span>
                                </span>
                                    <span class="m-widget12__text1">Sub-sector<br>
                                    <span>Molding</span>
                                </span>
                                    <span class="m-widget12__text1">Group<br>
                                    <span>Dashboard</span>
                                </span>
                                    <span class="m-widget12__text1">Keywords<br>
                                    <span> {{ $channel->keywords }}</span>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Portlet-->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <!--begin:: Widgets/Last Updates-->
                <div class="m-portlet m-portlet--full-height ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    RFQ Title 1
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                    data-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#"
                                       class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                        Actions
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                              style="left: auto; right: 54px;"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Open</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Invite a Supplier</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Remove</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Confirm Deal</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Media</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin::widget 12-->
                        <div class="m-widget4">
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-interface-3"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Status</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-success">Open</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-interface-3"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Suppliers</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-info">+5</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-folder-4"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Views</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-info">+13</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-line-graph"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Deadline</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-warning">2017/08/02</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Widget 12-->
                    </div>
                </div>
                <!--end:: Widgets/Last Updates-->
            </div>
            <div class="col-xl-3">
                <!--begin:: Widgets/Last Updates-->
                <div class="m-portlet m-portlet--full-height ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    RFQ Title 1
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                    data-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#"
                                       class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                        Actions
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                              style="left: auto; right: 54px;"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Open</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Invite a Supplier</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Remove</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Confirm Deal</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Media</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin::widget 12-->
                        <div class="m-widget4">
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-interface-3"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Status</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-success">Open</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-interface-3"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Suppliers</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-info">+5</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-folder-4"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Views</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-info">+13</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-line-graph"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Deadline</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-warning">2017/08/02</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Widget 12-->
                    </div>
                </div>
                <!--end:: Widgets/Last Updates-->
            </div>
            <div class="col-xl-3">
                <!--begin:: Widgets/Last Updates-->
                <div class="m-portlet m-portlet--full-height ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    RFQ Title 1
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                    data-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#"
                                       class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                        Actions
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                              style="left: auto; right: 54px;"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Open</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Invite a Supplier</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Remove</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Confirm Deal</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Media</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin::widget 12-->
                        <div class="m-widget4">
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-interface-3"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Status</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-success">Open</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-interface-3"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Suppliers</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-info">+5</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-folder-4"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Views</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-info">+13</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-line-graph"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Deadline</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-warning">2017/08/02</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Widget 12-->
                    </div>
                </div>
                <!--end:: Widgets/Last Updates-->
            </div>
            <div class="col-xl-3">
                <!--begin:: Widgets/Last Updates-->
                <div class="m-portlet m-portlet--full-height ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    RFQ Title 1
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                    data-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#"
                                       class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                        Actions
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                              style="left: auto; right: 54px;"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Open</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Invite a Supplier</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Remove</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Confirm Deal</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Media</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin::widget 12-->
                        <div class="m-widget4">
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-interface-3"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Status</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-success">Open</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-interface-3"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Suppliers</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-info">+5</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-folder-4"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Views</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-info">+13</span>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__icon m--font-brand">
                                        <i class="flaticon-line-graph"></i>
                                    </span>
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__text">Deadline</span>
                                </div>
                                <div class="m-widget4__ext">
                                    <span class="m-widget4__number m--font-warning">2017/08/02</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Widget 12-->
                    </div>
                </div>
                <!--end:: Widgets/Last Updates-->
            </div>
        </div>
    </div>
@endsection
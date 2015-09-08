@extends('layouts.master')

@section('scripts')
<script type="text/javascript" src="/dist/vendor.js"></script>
<script type="text/javascript" src="/dist/bundle-tpls.js"></script>
@stop

@section('content')
<ui-view class="router-outlet"></ui-view>
@stop
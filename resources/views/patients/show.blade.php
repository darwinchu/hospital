@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $item->name }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('patients.index') }}">Patients</a></li>
                    <li class="breadcrumb-item active">{{ $item->name }}</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tab1">
        					<patient-form
                            submit-url="{{ route('patients.update', $item->id) }}"
                            fetch-url="{{ route('patients.fetch-item', $item->id) }}"
        					></patient-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@extends('layouts.app')

@section('content')

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">ادخال بيانات</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('user.store') }}">
                        @csrf
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="box-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <h5> خطأ !</h5>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="name">الإسم </label>
                                <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name"
                                    placeholder="ادخل الإسم">
                            </div>
                            <div class="form-group">
                                <label for="email">البريد الألكتروني</label>
                                <input value="{{ old('email') }}" name="email" type="email" class="form-control"
                                    id="email" placeholder="البريد الألكتروني">
                            </div>
                            <div class="form-group">
                                <label for="password">كلمة المرور</label>
                                <input value="{{ old('password') }}" name="password" type="password" class="form-control"
                                    id="password" placeholder="كلمة المرور">
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>


    </section><!-- /.content -->
@endsection

@extends('layouts.admin')

@section('title')

Pengaturan

@endsection


@section('content')


<div class="card-admin">


    <h4 class="mb-4">

        Pengaturan Sistem

    </h4>


    <form>


        <div class="mb-4">


            <label class="form-label">

                Nama Sistem

            </label>


            <input

                type="text"

                class="form-control"

                value="ScholarHub">


        </div>


        <div class="mb-4">


            <label class="form-label">

                Nama Admin

            </label>


            <input

                type="text"

                class="form-control"

                value="Administrator">


        </div>


        <div class="mb-4">


            <label class="form-label">

                Email Admin

            </label>


            <input

                type="email"

                class="form-control"

                value="admin@scholarhub.com">


        </div>


        <div class="mb-5">


            <label class="form-label">

                Password

            </label>


            <input

                type="password"

                class="form-control"

                value="123">


        </div>


        <button

            type="button"

            class="btn btn-main">

            💾 Simpan Perubahan

        </button>


    </form>


</div>


@endsection
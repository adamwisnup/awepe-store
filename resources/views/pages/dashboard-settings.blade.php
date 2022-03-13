@extends('layouts.dashboard')

@section('title')
    AWEPE Store Setting
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Store Settings</h2>
                <p class="dashboard-subtitle">Make store that profitable</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Store Name</label>
                                                <input type="text" class="form-control" aria-describedby="storeHelp"
                                                    value="Papel La Casa" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" v-if="is_store_open">
                                                <label>Category</label>
                                                <select name="category" class="form-control">
                                                    <option value="">Furniture</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Store Status</label>
                                                <p class="text-muted">Apakah saat ini toko Anda buka?</p>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" type="radio" name="is_store_open"
                                                        id="openStoreTrue" value="true" />
                                                    <label class="custom-control-label" for="openStoreTrue">Buka</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" type="radio" name="is_store_open"
                                                        id="openStoreFalse" value="false" />
                                                    <label makasih class="custom-control-label"
                                                        for="openStoreFalse">Sementara Tutup</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button tyoe="submit" class="btn btn-success px-5">Save Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

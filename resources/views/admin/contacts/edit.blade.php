@extends('layouts.app')
@section('title','Data PRAKERINOTED | Data Contacts')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit Prakerinoted</strong> Data Siswa PKL
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route ('contacts.update', $contact->id)}}" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama Siswa</label>
                                                <input type="text" name="nama" class="form-control" value="{{ $contact->nama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Kelas</label>
                                                <input type="email" name="email" class="form-control" value="{{ $contact->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Nama Perusahaan</label>
                                                <textarea name="pesan" class = "form-control">{{ $contact->pesan}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Daerah Tempat PKL</label>
                                                <textarea name="pesan" class = "form-control">{{ $contact->pesan}}</textarea>
                                            </div>
                                            
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit Question
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@extends('layouts.app.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>{{__('blog.news')}}</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{__('blog.home')}}</a></li>
                <li class="breadcrumb-item active">{{__('blog.news')}}</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
  
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{route('news.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-add"></i>{{__('lang.add')}}</a>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr style="text-align: center">
                      <th>{{__('lang.no')}}</th>
                      <th>{{__('lang.image')}}</th>
                      <th>{{__('lang.short_des')}}</th>
                      <th>{{__('lang.status')}}</th>
                      <th>{{__('lang.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                      $stt = 1;    
                    @endphp

                    @foreach ($news as $item)
                    <tr>
                      <td style="text-align: center">{{$stt++}}</td>
                      <td style="text-align: center"><img height="100" src="{{ asset($item->image) }}"></td>
                      <td>
                        @if (Config::get('app.locale') == 'lo')
                          {{$item->name_la}}
                        @elseif (Config::get('app.locale') == 'en')
                          {{$item->name_en}}
                        @endif
                      </td>
                      <td style="text-align: center">
                        @if ($item->status == 1)
                          <label class="text-success">{{__('lang.active')}}</label>
                        @else
                          <label class="text-danger">{{__('lang.inactive')}}</label>
                        @endif
                      </td>
                      <td style="text-align: center">
                        <form action=" {{ route('news.destroy', $item->id) }} " method="POST">
                          @csrf
                          @method('DELETE')

                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i class="fas fa-trash"></i></button>

                        </form>
                      </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
@endsection
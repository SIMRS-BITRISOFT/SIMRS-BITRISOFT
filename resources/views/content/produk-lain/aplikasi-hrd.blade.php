@extends('layout.main')

@section('title', 'Aplikasi HRD')

@section('content')

    <section id="our-team" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-holder me-4 mb-4">
                        <h3 class="display-5 fw-bold text-dark">Aplikasi HRD</h3>
{{--                        <h5 class="fs-4 fw-bold text-dark">Dr. Leslie Taylor</h5>--}}
                    </div>
                </div>
                <div class="row col-md-8">
                    <div class="border bg-light p-4">
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eum inventore neque perspiciatis saepe! Aperiam at autem delectus ex explicabo, fugit incidunt natus perferendis praesentium provident, quisquam sapiente tempore veniam?</span>
                            <span>Amet distinctio dolorum et expedita, ipsam neque quia quod repudiandae sapiente veritatis! Amet doloribus, facilis nostrum numquam pariatur tempore voluptatibus! Ad deserunt earum maiores nemo nostrum quod repellat unde. Reprehenderit!</span>
                            <span>Assumenda corporis cupiditate deleniti deserunt laborum nam nesciunt nostrum officia perferendis, reiciendis? Delectus dolor enim eos est facere id natus necessitatibus neque, nulla perspiciatis, porro quam repellendus, sed similique tenetur!</span>
                            <span>Adipisci aut consequatur exercitationem id recusandae sequi veniam. Adipisci aliquid animi enim, eos excepturi exercitationem facilis illo libero, maiores molestiae numquam odio odit optio quibusdam sit sunt suscipit veritatis! Est!</span>
                            <span>Alias atque iusto quibusdam tenetur unde. Consequuntur cum eligendi error molestiae neque recusandae sit? Accusantium aperiam at corporis cum est ipsa molestiae recusandae rem veniam. Adipisci error iure voluptatibus voluptatum?</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Ambil view aplikasi absen--}}
    @include('content.produk-lain.aplikasi-absen')

    {{--Ambil view aplikasi satu sehat--}}
    @include('content.produk-lain.aplikasi-satu-sehat')

    {{--Tambahin kalo ada section lain--}}

@endsection

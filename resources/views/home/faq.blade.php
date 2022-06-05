@extends('layouts.home')

@section('title', 'Beauty-Center')


@section('content')

<style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>

<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Contact Us</h1>
            </div>
          </div>
        </div>
</section>

<div class="container" style="">
        <center>
            <h4 style="color:black; "><a href="/">Home</a>/<a href="{{{route('faq')}}}">Frequently
                    Asked Question</a>
            </h4>
        </center>
    </div>
    <div class="container">
        <h1>Frequently Asked Question</h1>
        <hr style="width: 1200px">
        @foreach($datalist as $rs)
            <button class="accordion">{{$rs->question}}</button>
            <div class="panel">
                <p>{!! $rs->answer !!}</p>
            </div>
        @endforeach
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        </script>

    </div>





@endsection
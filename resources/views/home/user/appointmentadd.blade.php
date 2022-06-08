@extends('layouts.home')

@section('title', 'Beauty-Center')


@section('content')


        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px">
                    <h1 class="heading mb-3 text-white">User Appointment</h1></p>
                </div>
            </div>
        </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <div class="card shadow mb-4">

                    <form action="{{route('user_appointment_store')}}" id="review_form" class="review_form" method="post">
                        @csrf
                        <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                            <input type="hidden" name="service_id" required="required" value="{{$id}}">
                            <input type="date" class="review_form_input" name="date" placeholder="Date" required="required">
                            <input type="time" class="review_form_input" name="time" placeholder="Time" required="required">
                            <input type="hidden" name="price" required="required" value="{{$price}}">
                            <input type="hidden" class="input" name="status" value="True"/>
                            <input class="radio" type="radio" name="payment" value="cash" checked /> <span>Cash</span>
                            <input class="radio" type="radio" name="payment" value="credit card" /> <span>Credit Card</span>
                        </div>
                        <textarea style="width: 80%; height: 120px; resize: none;" class="review_form_text" name="note" name="review_form_text" placeholder="Note"></textarea><br>
                        <button type="submit" class="btn btn-primary">Appointment</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
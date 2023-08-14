@extends('user.layout.main')
@section('content')
<div class="w3-container" style="margin-top: 30px">
    <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
        <header class="w3-container w3-border-bottom w3-border-teal w3-center">
            <h2>CheckOut</h2>
        </header>
        <div class="w3-container w3-padding">
            <form action="/order-store" method="post">
                @csrf

                <div class="w3-container">
                    <label>Name</label>
                    <input class="w3-input" type="text" name="name" value="" required />
                </div>
                <br />
                <div class="w3-container">
                    <label>Address</label>
                    <input class="w3-input" type="text" name="address" value="" required />
                </div>
                <br />
                <div class="w3-container">
                    <label>Contact</label>
                    <input class="w3-input" type="text" name="contact" value="" required />
                </div>
                <br />

                <div class="w3-container">
                    <label>Message</label>
                    <textarea class="w3-input" rows="5" columns="8" name="message" required></textarea>
                </div>

                <div class="w3-container w3-center">
                    <button type="submit" class="w3-button w3-teal w3-round w3-margin-top" required>
                        Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div style="margin-bottom: 40px"></div>

@endsection
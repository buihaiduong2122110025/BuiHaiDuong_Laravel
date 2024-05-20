@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div>
        <section class="contact">
            <div class="contact-info">

                <h2>Contact Information</h2>
                <p>Name: Mr.Duong</p>
                <p>Address: 103 Tăng Nhơn Phú, Phước Long B, Quận 9, Thành phố Hồ Chí Minh, Việt Nam</p>
                <p>Phone: 0981992900</p>
                <p>Email: dayduongtui@gmail.com</p>
                <div class="google-map">
                    <iframe class="ggmap"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7609399213206!2d106.77063267462792!3d10.829597989322405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752701cbacce21%3A0xc55b53936092d0e1!2zS8O9IFTDumMgWMOhIFRyxrDhu51uZyBDYW8gxJDhurNuZyBDw7RuZyBUaMawxqFuZyBUUC5IQ00!5e0!3m2!1svi!2s!4v1699500845428!5m2!1svi!2s"></iframe>
                </div>
            </div>
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" placeholder="Enter Name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" placeholder="Enter Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" placeholder="Enter Message" required></textarea>
                    </div>
                    <div class="btn-contact">
                    <button  type="submit">Submit</button>
                </div>
                </form>
            </div>

        </section>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection

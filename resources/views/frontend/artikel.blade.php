@extends('layouts.frontend')
@section('title', 'artikel')
@section('content')
<div class="popular-product-area wrapper-padding-3 pb-115">
    <div class="container-fluid">
        <br>
        <div class="section-title-furits section-title-6 text-center mb-50">
            <h2>Artikel</h2>
        </div>
        <br>
        <div class="product-style">
            <div class="popular-product-active owl-carousel">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/img/product/fashion-colorful/1.png') }}" alt=""> 
                            </a>
                        </div>
                        <div class="funiture-product-content text-center">
                            <h4><a href="#">Skincare</a></h4>
                            <span>Perawatan kulit adalah rangkaian dari berbagai penerapan yang mendukung keadaan integritas kulit, untuk meningkatkan sebuah penampilan dan mengubah kondisi kulit. Mereka dapat mengandung nutrisi, menghindari dari paparan sinar matahari yang berlebihan dan penggunaan produk kulit emolien yang tepat.</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/img/product/fashion-colorful/2.png') }}" alt=""> 
                            </a>
                        </div>
                        <div class="funiture-product-content text-center">
                            <h4><a href="#">Make Up</a></h4>
                            <span>Make Up atau Kosmetik adalah zat perawatan yang digunakan untuk meningkatkan penampilan atau aroma tubuh manusia. Kosmetik umumnya merupakan campuran dari beragam senyawa kimia, beberapa terbuat dari sumber-sumber alami dan kebanyakan dari bahan sintetis.</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/img/product/fashion-colorful/3.png') }}" alt=""> 
                            </a>
                        </div>
                        <div class="funiture-product-content text-center">
                            <h4><a href="#">Hair Care</a></h4>
                            <span>Perawatan rambut adalah istilah keseluruhan untuk kebersihan dan tata rias pada rambut yang tumbuh di kulit kepala manusia. Selain membuat rambut berkilau, perawatan rambut juga memiliki fungsi untuk membuat rambut sehat dan halus serta terbebas dari kerontokan dan ketombe.</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/img/product/fashion-colorful/4.png') }}" alt=""> 
                            </a>
                        </div>
                        <div class="funiture-product-content text-center">
                            <h4><a href="#">Beauty Tools</a></h4>
                            <span>Beauty tools adalah inovasi baru yang dapat memaksimalkan khasiat skincare Anda hingga dapatkan hasil yang maksimal. Tak hanya makeup dan skincare yang terus berkembang, kini beauty tools pun turut hadir dengan berbagai inovasi baru untuk membantu mengoptimalkan rutinitas perawatan wajah.</span>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
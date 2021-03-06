@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="row">
            <div class="hide-on-med-and-up green overlay-box"></div>

            <div class="fixed-action-btn hide-on-med-and-up">
                <a class="btn-floating btn-large green" href="tel:{{$user->phone_number}}">
                    <i class="large material-icons">phone</i>
                </a>
            </div>

            <div class="col l3 m4 s12 profile-details white ">
                <center>
                    <div class="profile-img white circle z-depth-1"
                         style="background-image: url('{{URL::to('storage/profile-img/default.jpg')}}')">
                    </div>
                </center>

                <span class="label">Name</span>
                <h6>{{$user->firstname." ".$user->lastname}}</h6>

                <span class="label">Email</span>
                <h6>{{$user->email}}</h6>

                <span class="label">Country</span>
                <h6>{{$user->country}}</h6>

                <span class="label">State</span>
                <h6>{{$user->state}}</h6>

                <span class="label">Town</span>
                <h6>{{$user->town}}</h6>
                <br>
                <a href="#modal1" class="btn green waves-effect waves-light modal-trigger"><i class="material-icons left">phone</i>Contant Farmer
                </a>
                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4 class="green-text">Contact Farmer</h4>
                        <br>
                        <p>Email: {{$user->email}}</p>
                        <p>Phone: {{$user->phone_number}}</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
                    </div>
                </div>

            </div>

            <center>
                <div class="col s12 m8 l9 mbox">
                    <div class="mbox-content">
                        <div class="header white-text green">Farmer's Bio</div>
                        <div class="body white">
                            {{$user->bio}}
                        </div>
                    </div>
                </div>


                <div class="col s12 m8 l9 mbox">
                    <div class="mbox-content">
                        <div class="header white-text green">Farmer's Ads</div>
                        <div class="body white">
                            <ul class="collection">
                                @foreach($userAds as $userAd)
                                    <li class="collection-item avatar">
                                        <?php
                                        $eachImg = explode(',', $userAd->img_url);
                                        $img_url = $eachImg[0];
                                        ?>
                                        <img src="{{URL::to($img_url)}}" class="circle">
                                        <span class="title">{{$userAd->title}}</span>
                                        <p>{{$userAd->category}}</p>
                                        <a href="{{URL::to('/ads/'.$userAd->id)}}" class="secondary-content"><i
                                                    class="material-icons blue-text">visibility</i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>

@endsection
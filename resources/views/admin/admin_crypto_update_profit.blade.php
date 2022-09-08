@extends('layout.admin')
@section('content')
<div class="p-2 m-2  bg-primary text-light">
    <h3>Bitcoin Profit</h3>
 
</div>
               @if(session('success'))
                   <div class="alert alert-success p-2 text-center my-2">{{ session('success') }}</div>
               @endif

        <div class="row">
            <?php 
    
            
                foreach($btc as $btc){
    
    
                        ?>
                        <div class="col-12 col-md-6 col-lg-6">
                             <div class="card custom-card py-2 m-2" >
    
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Name: </h6>
                                        <h6 class=""> {{$btc->user->name}} </h6>
                                    </div>
                                   
                                    
                                    <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                        <h6>Email: </h6>
                                        <h6 class="">{{$btc->user->email}} </h6>
                                        
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>State:</h6>
                                        <h6 class="">{{$btc->user->country}} </h6>
                                        
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>State:</h6>
                                        <h6 class="">{{$btc->user->state}} </h6>
                                        
                                    </div>
    
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Date Invested: </h6>
                                        <h6 class="">{{$btc->created_at->diffForHumans()}} -
                                            {{$btc->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                        
                                    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Time Invested: </h6>
                                        <h6 class="">{{$btc->created_at->isoFormat('h:M:s A')}}  </h6>
    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Amount invested: </h6>
                                        <h6 class="">${{ $btc->amount}}</h6>
                                        
                                    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Profit: </h6>
                                        <h6 class="">{{$btc->profit}} </h6>
                                        
                                    </div>
    
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Update: </h6>
                                        <h6 class=""><form action="{{ route('btc_updated',$btc->user_id) }}" method="post" class="d-flex">
                                            @csrf
                                            <input type="number" class="form-control" name="BtcNewProfit" step="0.01" value=""><button type="submit" class="btn btn-primary">Update</button>
                                        </form> </h6>
                                        
                                    </div>
    
                                    <div class="icon"><i class="fas fa-users"></i></div>
                                
                                </div>
                        </div>
                               
    
    
                        <?php
                    
                }
    
            ?>
        </div>


<div class="p-2 m-2 mt-4  bg-primary text-light">
    <h3>Etherum Investment Profit</h3>
 
</div>
<div class="row">
    <?php 
    
            
        foreach($eth as $eth){


                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$eth->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$eth->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$eth->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$eth->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$eth->created_at->diffForHumans()}} -
                                        {{$eth->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$eth->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $eth->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$eth->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('eth_updated',$eth->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" name="EthNewProfit" step="0.01" value=""><button type="submit" class="btn btn-primary">Update</button>
                                    </form> </h6>
                                    
                                </div>

                                <div class="icon"><i class="fas fa-users"></i></div>
                            
                            </div>
                        </div>

                    <?php
                
            }

    ?>
</div>

<div class="p-2 m-2 mt-4  bg-primary text-light">
    <h3>Litecoin Investment Profit</h3>
 
</div>
<div class="row">
    <?php 
    
            
        foreach($ltc as $ltc){


                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$ltc->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$ltc->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$ltc->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$ltc->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$ltc->created_at->diffForHumans()}} -
                                        {{$ltc->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$ltc->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $ltc->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$ltc->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('ltc_updated',$ltc->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" name="LtcNewProfit" step="0.01" value=""><button type="submit" class="btn btn-primary">Update</button>
                                    </form> </h6>
                                    
                                </div>

                                <div class="icon"><i class="fas fa-users"></i></div>
                            
                            </div>
                        </div>

                    <?php
                
            }

    ?>
</div>

<div class="p-2 m-2 mt-4  bg-primary text-light">
    <h3>Tether Savings Investment</h3>
 
</div>
    <div class="row">

    
        <?php 
        
                
            foreach($tether as $tether){


                        ?>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card custom-card py-2 m-2" >

                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Name: </h6>
                                        <h6 class=""> {{$tether->user->name}} </h6>
                                    </div>
                                
                                    
                                    <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                        <h6>Email: </h6>
                                        <h6 class="">{{$tether->user->email}} </h6>
                                        
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>State:</h6>
                                        <h6 class="">{{$tether->user->country}} </h6>
                                        
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>State:</h6>
                                        <h6 class="">{{$tether->user->state}} </h6>
                                        
                                    </div>

                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Date Invested: </h6>
                                        <h6 class="">{{$tether->created_at->diffForHumans()}} -
                                            {{$tether->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                        
                                    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Time Invested: </h6>
                                        <h6 class="">{{$tether->created_at->isoFormat('h:M:s A')}}  </h6>

                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Amount invested: </h6>
                                        <h6 class="">${{ $tether->amount}}</h6>
                                        
                                    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Profit: </h6>
                                        <h6 class="">{{$tether->profit}} </h6>
                                        
                                    </div>

                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Update: </h6>
                                        <h6 class=""><form action="{{ route('tether_updated',$tether->user_id) }}" method="post" class="d-flex">
                                            @csrf
                                            <input type="number" class="form-control" step="0.01" name="tetherNewProfit" value=""><button type="submit" class="btn btn-primary">Update</button>
                                        </form> </h6>
                                        
                                    </div>

                                    <div class="icon"><i class="fas fa-users"></i></div>
                                
                                </div>
                            </div>

                        <?php
                    
                }

        ?>

    </div>
<div class="p-2 m-2 mt-4  bg-primary text-light">
    <h3>Bitcoin Cash Profit</h3>
 
</div>
<div class="row">


    <?php 
    
    

         
        foreach($btc_cash as $btc_cash){
                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$btc_cash->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$btc_cash->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$btc_cash->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$btc_cash->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$btc_cash->created_at->diffForHumans()}} -
                                        {{$btc_cash->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$btc_cash->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $btc_cash->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$btc_cash->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('btc_cash_updated',$btc_cash->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" step="0.01" name="BtcCashNewProfit" value=""><button type="submit" class="btn btn-primary">Update</button>
                                    </form> </h6>
                                    
                                </div>

                                <div class="icon"><i class="fas fa-users"></i></div>
                            
                            </div>
                        </div>
                    <?php
                
            }

    ?>
</div>

<div class="p-2 m-2 mt-4  bg-primary text-light">
    <h3>Doge Coin</h3>
 
</div>

<div class="row">


    <?php 
    
    
            foreach($dogecoin as $dogecoin){
                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$dogecoin->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$dogecoin->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$dogecoin->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$dogecoin->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$dogecoin->created_at->diffForHumans()}} -
                                        {{$dogecoin->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$dogecoin->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $dogecoin->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$dogecoin->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('dogecoin_updated',$dogecoin->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" step="0.01" name="dogecoinNewProfit" value=""><button type="submit" class="btn btn-primary">Update</button>
                                    </form> </h6>
                                    
                                </div>

                                <div class="icon"><i class="fas fa-users"></i></div>
                            
                            </div>
                        </div>
                    <?php
                
            
         }
      

    ?>
</div>
<div class="p-2 m-2 mt-4  bg-primary text-light">
    <h3>stellar Coin</h3>
 
</div>

<div class="row">


    <?php 
    
    
            foreach($stl as $stl){
                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$stl->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$stl->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$stl->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$stl->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$stl->created_at->diffForHumans()}} -
                                        {{$stl->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$stl->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $stl->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$stl->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('stl_updated',$stl->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" step="0.01" name="stlNewProfit" value=""><button type="submit" class="btn btn-primary">Update</button>
                                    </form> </h6>
                                    
                                </div>

                                <div class="icon"><i class="fas fa-users"></i></div>
                            
                            </div>
                        </div>
                    <?php
                
            
         }
      

    ?>
</div>

<div class="p-2 m-2 mt-4  bg-primary text-light">
    <h3>Polkadot Coin</h3>
 
</div>

<div class="row">


    <?php 
    
    
            foreach($pkd as $pkd){
                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$pkd->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$pkd->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$pkd->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$pkd->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$pkd->created_at->diffForHumans()}} -
                                        {{$pkd->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$pkd->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $pkd->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$pkd->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('pkd_updated',$pkd->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" step="0.01" name="pkdNewProfit" value=""><button type="submit" class="btn btn-primary">Update</button>
                                    </form> </h6>
                                    
                                </div>

                                <div class="icon"><i class="fas fa-users"></i></div>
                            
                            </div>
                        </div>
                    <?php
                
            
         }
      

    ?>
</div>
<div class="p-2 m-2 mt-4  bg-primary text-light">
    <h3>Tron Coin</h3>
    
</div>

<div class="row">


    <?php 
    
    
            foreach($tron as $tron){
                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$tron->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$tron->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$tron->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$tron->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$tron->created_at->diffForHumans()}} -
                                        {{$tron->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$tron->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $tron->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$tron->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('tron_updated',$tron->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" step="0.01" name="tronNewProfit" value=""><button type="submit" class="btn btn-primary">Update</button>
                                    </form> </h6>
                                    
                                </div>

                                <div class="icon"><i class="fas fa-users"></i></div>
                            
                            </div>
                        </div>
                    <?php
                
            
         }
      

    ?>
</div>

@endsection
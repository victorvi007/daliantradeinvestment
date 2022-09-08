@extends('layout.admin')
@section('content')
<div class="p-2 m-2  bg-primary text-light">
    <h3>Hedge Fund Investment</h3>
 
</div>
               @if(session('success'))
                   <div class="alert alert-success p-2 text-center my-2">{{ session('success') }}</div>
               @endif

        <div class="row">
            <?php 
    
            
            foreach($hfi as $hfi){
    
    
                        ?>
                        <div class="col-12 col-md-6 col-lg-6">
                             <div class="card custom-card py-2 m-2" >
    
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Name: </h6>
                                        <h6 class=""> {{$hfi->user->name}} </h6>
                                    </div>
                                   
                                    
                                    <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                        <h6>Email: </h6>
                                        <h6 class="">{{$hfi->user->email}} </h6>
                                        
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>State:</h6>
                                        <h6 class="">{{$hfi->user->country}} </h6>
                                        
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>State:</h6>
                                        <h6 class="">{{$hfi->user->state}} </h6>
                                        
                                    </div>
    
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Date Invested: </h6>
                                        <h6 class="">{{$hfi->created_at->diffForHumans()}} -
                                            {{$hfi->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                        
                                    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Time Invested: </h6>
                                        <h6 class="">{{$hfi->created_at->isoFormat('h:M:s A')}}  </h6>
    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Amount invested: </h6>
                                        <h6 class="">${{ $hfi->amount}}</h6>
                                        
                                    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Profit: </h6>
                                        <h6 class="">{{$hfi->profit}} </h6>
                                        
                                    </div>
    
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Update: </h6>
                                        <h6 class=""><form action="{{ route('hfi_updated',$hfi->user_id) }}" method="post" class="d-flex">
                                            @csrf
                                            <input type="number" class="form-control" name="hfiNewProfit" step="0.01" value=""><button type="submit" class="btn btn-primary">Update</button>
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
    <h3>Individual Retirement Investment</h3>
 
</div>
<div class="row">
    <?php 
    
            
        foreach($iri as $iri){


                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$iri->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$iri->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$iri->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$iri->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$iri->created_at->diffForHumans()}} -
                                        {{$iri->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$iri->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $iri->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$iri->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('iri_updated',$iri->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" name="IriNewProfit" step="0.01" value=""><button type="submit" class="btn btn-primary">Update</button>
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
    <h3>Child Savings Investment</h3>
 
</div>
    <div class="row">

    
        <?php 
        
                
            foreach($csi as $csi){


                        ?>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card custom-card py-2 m-2" >

                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Name: </h6>
                                        <h6 class=""> {{$csi->user->name}} </h6>
                                    </div>
                                
                                    
                                    <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                        <h6>Email: </h6>
                                        <h6 class="">{{$csi->user->email}} </h6>
                                        
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>State:</h6>
                                        <h6 class="">{{$csi->user->country}} </h6>
                                        
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>State:</h6>
                                        <h6 class="">{{$csi->user->state}} </h6>
                                        
                                    </div>

                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Date Invested: </h6>
                                        <h6 class="">{{$csi->created_at->diffForHumans()}} -
                                            {{$csi->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                        
                                    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Time Invested: </h6>
                                        <h6 class="">{{$csi->created_at->isoFormat('h:M:s A')}}  </h6>

                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Amount invested: </h6>
                                        <h6 class="">${{ $csi->amount}}</h6>
                                        
                                    
                                    </div>
                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Profit: </h6>
                                        <h6 class="">{{$csi->profit}} </h6>
                                        
                                    </div>

                                    <div class="p-2 d-flex justify-content-between">
                                        <h6>Update: </h6>
                                        <h6 class=""><form action="{{ route('csi_updated',$csi->user_id) }}" method="post" class="d-flex">
                                            @csrf
                                            <input type="number" class="form-control" step="0.01" name="CsiNewProfit" value=""><button type="submit" class="btn btn-primary">Update</button>
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
    <h3>Health Savings Investment</h3>
 
</div>
<div class="row">


    <?php 
    
    

         
        foreach($hsi as $hsi){
                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$hsi->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$hsi->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$hsi->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$hsi->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$hsi->created_at->diffForHumans()}} -
                                        {{$hsi->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$hsi->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $hsi->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$hsi->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('hsi_updated',$hsi->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" step="0.01" name="HsiNewProfit" value=""><button type="submit" class="btn btn-primary">Update</button>
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
    <h3>Stock Trading Investment</h3>
 
</div>

<div class="row">


    <?php 
    
    
            foreach($sti as $sti){
                    ?>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card custom-card py-2 m-2" >

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Name: </h6>
                                    <h6 class=""> {{$sti->user->name}} </h6>
                                </div>
                               
                                
                                <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                                    <h6>Email: </h6>
                                    <h6 class="">{{$sti->user->email}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$sti->user->country}} </h6>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>State:</h6>
                                    <h6 class="">{{$sti->user->state}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Date Invested: </h6>
                                    <h6 class="">{{$sti->created_at->diffForHumans()}} -
                                        {{$hsi->created_at->isoFormat('Do MMM YYYY')}} </h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Time Invested: </h6>
                                    <h6 class="">{{$sti->created_at->isoFormat('h:M:s A')}}  </h6>

                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Amount invested: </h6>
                                    <h6 class="">${{ $sti->amount}}</h6>
                                    
                                
                                </div>
                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Profit: </h6>
                                    <h6 class="">{{$sti->profit}} </h6>
                                    
                                </div>

                                <div class="p-2 d-flex justify-content-between">
                                    <h6>Update: </h6>
                                    <h6 class=""><form action="{{ route('sti_updated',$sti->user_id) }}" method="post" class="d-flex">
                                        @csrf
                                        <input type="number" class="form-control" step="0.01" name="StiNewProfit" value=""><button type="submit" class="btn btn-primary">Update</button>
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
@extends('layout.index')

@section('content')

<div class="banner bg-primary">
    <div class="container">


        <div class="logo">
            <a href="/">
                <img src="{{asset('img/logo.svg')}}" alt="dalian" class="logo">
            </a>
            
        </div>
        <nav class="d-none d-md-flex d-lg-flex">
            <a href="/investment" class="btn">Investments</a>
            <a href="/about" class="btn">About</a>
            <a href="terms" class="btn">T&C</a>
            <a href="#" class="btn">Contacts</a>
            <a href="#" class="btn border">Register</a>
            <a href="{{ route('login') }}" class="btn btn-secondary text-light">Login</a>
        </nav>
        <div class="harmbugger  d-block d-md-none d-lg-none text-light my-auto" id="harmbugger">
            <h1>
                <i class="fas fa-bars"></i>

            </h1>

        </div>
    </div>




</div>




        
<section class="terms my-5">
    <h3 class="text-center text-primary fw-bolder ">Terms of Use</h3>
    <div class="container my-1">

        <ol class="my-1" style="list-style:lower-roman;">

            <li>
                We solely ask for personal information when it is absolutely necessary to provide you with a service. With your knowledge and consent, we collect it in a fair and lawful manner. We also explain why we're collecting it and how we'll use it.
            </li>
            <li>The user's registration on the website acknowledges that he has read and understood the current Rules, and that he intends to follow them to the letter. The user must cancel their account registration and exit this website if they reject the rules, disagree with the general doctrine of the rules, or have any other disagreements.
            </li>
            <li>
                The current rules can be amended at the project managers' discretion. The changes take effect as soon as they are published on the website and sent to individual's mail in this situation.
            </li>
            <li>
                This website's intellectual property and rights, including all published content, are owned by Dalian Investments Company. Any copying of materials or content is prohibited, unless the lawful owner of the information grants a special permit.
            </li>
            <li>
                Unregistered users will only be able to access limited parts of the website.
            </li>
            <li>
                Claims relating to the substance of these rules, the terms of the investment offer, partnership cooperation, and other areas of the project's work will be rejected. We reserve the right, at our sole discretion, to amend the program's rules, commissions, and prices at any time and without notice, particularly to protect the integrity and security of the members' interests. You acknowledge that it is solely your obligation to study and understand the current terms.
            </li>
            <li>
                Dalian Investments is not responsible or accountable for any damages, losses, or costs incurred as a result of a member's violation of the terms and conditions of use of our website. You promise Dalian Investments that you will not use this site in any way that is illegal, and that you will follow all local, national, and international laws.
            </li>
            <li>
                Dalian Investments is not responsible or accountable for any damages, losses, or costs incurred as a result of a member's violation of the terms and conditions of use of our website. You promise Dalian Investments that you will will not use this site in any way that is illegal, and that you will follow all local, national, and international laws.
            </li>
            <li>
                We will not allow SPAM or any other form of unsolicited commercial email in this program. SPAM violators will be removed from the program immediately and permanently.
            </li>
            
            <li>
                Without providing a reason, Dalian Trade Investments reserves the right to accept or reject any member for membership.
            </li>
            
        </ol>
    </div>
</section>

@endsection
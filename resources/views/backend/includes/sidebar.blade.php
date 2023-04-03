    @if(Auth::user())
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li><a href="{{ Route('dashboard') }}"><i class="ti-home"></i> <span>Dashboard</span></a>
                        </li>
                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3 or Auth::user()->role == 4 or Auth::user()->role ==5)
                            <li class="has-sub-menu"><a href="#"><i class="fa fa-cogs mt-1"></i> <span>Frontend</span></a>
                                <ul class="side-header-sub-menu">
                                    <li class="has-sub-menu"><a href="#"> <span>Main</span></a>
                                        <ul class="side-header-sub-menu">
                                            <li class="has-sub-menu"><a href="#"><span>About</span></a>
                                                <ul class="side-header-sub-menu">
                                                        <li><a href="{{ Route('addAbout') }}"><span>Add About</span></a></li>
                                                        <li><a href="{{ Route('manageAboutOption') }}"><span>Manage About</span></a></li> 
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="side-header-sub-menu">
                                            <li class="has-sub-menu"><a href="#"><span>Involve</span></a>
                                                <ul class="side-header-sub-menu">
                                                    @if(Auth::user()->role == 1)
                                                    <li><a href="{{ Route('addinvolve') }}"><span>Add involve</span></a></li>
                                                    <li><a href="{{ Route('manageInvolve') }}"><span>Manage Involve</span></a></li>
                                                    @endif
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="side-header-sub-menu">
                                            <li class="has-sub-menu"><a href="#"><span>Facilities</span></a>
                                                <ul class="side-header-sub-menu">
                                                    <li><a href="{{ Route('addFacility') }}"><span>Add Facilities</span></a></li>
                                                    <li><a href="{{ Route('manageFacilities') }}"><span>Manage Facilities</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="side-header-sub-menu">
                                            <li class="has-sub-menu"><a href="#"><span>Events</span></a>
                                                <ul class="side-header-sub-menu">
                                                    <li><a href="{{ Route('addEvents') }}"><span>Add Events</span></a></li>
                                                    <li><a href="{{ Route('manageEvents') }}"><span>Manage Events</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="side-header-sub-menu">
                                            <li class="has-sub-menu"><a href="#"><span>News</span></a>
                                                <ul class="side-header-sub-menu">
                                                    <li><a href="{{ Route('addNews') }}"><span>Add News</span></a></li>
                                                    <li><a href="{{ Route('manageNews') }}"><span>Manage News</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            @endif
                    
                            @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3 or Auth::user()->role == 4)
                                <ul class="side-header-sub-menu">
                                    <li class="has-sub-menu"><a href="#"> <span>Orphanages</span></a>
                                        <ul class="side-header-sub-menu">
                                            <li><a href="{{ route('addOrphanage') }}"><span>Add Orphanage</span></a></li>
                                            <li><a href="{{ route('manageOrphanage') }}"><span>Manage Orphanage</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            @endif



                            @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3 or Auth::user()->role == 4)
                                <ul class="side-header-sub-menu">
                                    <li class="has-sub-menu"><a href="#"> <span>Orphans</span></a>
                                        <ul class="side-header-sub-menu">
                                            <li><a href="{{ route('addOrphan') }}"><span>Add Orphan</span></a></li>
                                            <li><a href="{{ route('orphanList') }}"><span>Orphan List</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            @endif
                        </li>
                        

                        



                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                        <li class="has-sub-menu"><a href="#"><i class="fa-solid fa-child"></i> <span>Adoption</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="{{ route('adoptionRequest') }}"><span>Adoption Requests</span></a></li>
                                <li><a href="{{ Route('adoptedBabyList') }}"><span>Adopted Baby List</span></a></li>
                                <li><a href="{{ Route('adopterList') }}"><span>Adopters List</span></a></li>
                                <li><a href="{{ route('makeAdoption') }}"><span>Make an Adoption</span></a></li>
                            </ul>
                        </li>
                        @endif


                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3)
                        <li class="has-sub-menu"><a href="#"><i class="fa-solid fa-handshake mt-1"></i> <span>Contribution</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="{{ route('addDonor') }}"><span>Add Contributor</span></a></li>
                                <li><a href="#"><span>Manage Contributor</span></a></li>
                            </ul>
                        </li>
                        @endif


                        @if(Auth::user()->role == 1 or Auth::user()->role == 2)
                        <li class="has-sub-menu"><a href="#"><i class="zmdi zmdi-accounts"></i> <span>Staff</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="{{ route('addStaff') }}"><span>Add Staff</span></a></li>
                                <li><a href="{{ Route('staffList') }}"><span>Manage Staff</span></a></li>
                            </ul>
                        </li>
                        @endif


                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3 or Auth::user()->role == 4)
                        <li class="has-sub-menu"><a href="#"><i class="fa fa-genderless"></i> <span>Volunteer</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="{{ Route('backVolunteer') }}"><span>Add Volunteer</span></a></li>
                                <li><a href="{{ route('volunteerRequest') }}"><span>Volunteer Requests</span></a></li>
                            </ul>
                        </li>
                        @endif



                        @if(Auth::user()->role == 1 or Auth::user()->role == 2)
                            <li class="has-sub-menu"><a href="#"><i class="fa fa-genderless"></i> <span>Partner</span></a>
                                <ul class="side-header-sub-menu">
                                    <li><a href="{{ route('addpart') }}"><span>Add Partner</span></a></li>
                                    <li><a href="{{ route('partnerRequest') }}"><span>Partner Requests</span></a></li>
                                </ul>
                            </li>
                        @endif



                        @if(Auth::user()->role == 1 or Auth::user()->role == 2)
                            <li class="has-sub-menu"><a href="#"><i class="fa fa-genderless"></i> <span>Sponsor</span></a>
                                <ul class="side-header-sub-menu">
                                    <li><a href="{{ route('backSponsor') }}"><span>Add Sponsor</span></a></li>
                                    <li><a href="{{ route('sponsorRequest') }}"><span>Sponsor Requests</span></a></li>
                                </ul>
                            </li>
                        @endif



                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3 or Auth::user()->role == 4)
                            <li class="has-sub-menu"><a href="#"><i class="fa-solid fa-list"></i> <span>Sign Up</span></a>
                                <ul class="side-header-sub-menu">
                                    <li><a href="{{ Route('signedUpList') }}"><span>Manage Sign Up</span></a></li>
                                </ul>
                            </li>
                        @endif


                        @if(Auth::user()->role == 1 or Auth::user()->role == 2 or Auth::user()->role == 3 or Auth::user()->role == 4 or Auth::user()->role ==5)
                            <li class="has-sub-menu"><a href="#"><i class="ti-anchor"></i> <span>Insights</span></a>
                                <ul class="side-header-sub-menu">
                                    <li><a href="{{ route('basicTable') }}"><span>Events</span></a></li>
                                    <li><a href="{{ route('basicTable') }}"><span>Facilities</span></a></li>
                                    <li><a href="{{ route('basicTable') }}"><span>News</span></a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div>
    @endif

        <div class="content-body">
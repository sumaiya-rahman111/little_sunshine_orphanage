<div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li><a href="{{ Route('dashboard') }}"><i class="ti-home"></i> <span>Dashboard</span></a>
                        </li>


                        <li class="has-sub-menu"><a href="#"><i class="fa fa-cogs mt-1"></i> <span>Frontend</span></a>

                            <ul class="side-header-sub-menu">
                                <li class="has-sub-menu"><a href="#"> <span>Main</span></a>
                                    <ul class="side-header-sub-menu">
                                        <li class="has-sub-menu"><a href="#"><span>About</span></a>
                                            <ul class="side-header-sub-menu">
                                                @if(Auth::user())
                                                    @if(Auth::user()->role == 1)
                                                        <li><a href="{{ Route('addAbout') }}"><span>Add About</span></a></li>
                                                        <li><a href="{{ Route('manageAboutOption') }}"><span>Manage About</span></a></li>
                                                    @else
                                                        <li><a href="{{ Route('selectAbout') }}"><span>Select involve</span></a></li>
                                                    @endif
                                                @endif
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="side-header-sub-menu">
                                        <li class="has-sub-menu"><a href="#"><span>Involve</span></a>
                                            <ul class="side-header-sub-menu">
                                                @if(Auth::user())
                                                    @if(Auth::user()->role == 1)
                                                        <li><a href="{{ Route('addinvolve') }}"><span>Add involve</span></a></li>
                                                        <li><a href="{{ Route('manageInvolve') }}"><span>Manage Involve</span></a></li>
                                                    @else
                                                        <li><a href="{{ Route('selectInvolve') }}"><span>Select involve</span></a></li>
                                                    @endif
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


                            <ul class="side-header-sub-menu">
                                <li class="has-sub-menu"><a href="#"> <span>Orphanages</span></a>
                                    <ul class="side-header-sub-menu">
                                        <li><a href="{{ route('addOrphanage') }}"><span>Add Orphanage</span></a>
                                        <li><a href="{{ route('manageOrphanage') }}"><span>Manage Orphanage</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="side-header-sub-menu">
                                <li class="has-sub-menu"><a href="#"> <span>Orphans</span></a>
                                    <ul class="side-header-sub-menu">
                                        <li><a href="{{ route('addOrphan') }}"><span>Add Orphan</span></a></li>
                                        <li><a href="{{ route('orphanList') }}"><span>Orphan List</span></a></li>
                                        </li>
                                    </ul>
                                </li>
                            </ul>


                            
                        </li>
                        
                        <li class="has-sub-menu"><a href="#"><i class="ti-layout"></i> <span>Table</span></a>
                        <ul class="side-header-sub-menu">
                                <li class="has-sub-menu"><a href="#"> <span>Internal Affairs</span></a>
                                    <ul class="side-header-sub-menu">
                                        @if(Auth::user()->role == 1 or Auth::user()->role == 2)
                                        <li><a href="{{ Route('staffList') }}"><span>Staff List</span></a></li>
                                        @endif
                                        <li><a href="{{ Route('adoptedBabyList') }}"><span>Adopted Baby List</span></a></li>
                                        <li><a href="{{ Route('signedUpList') }}"><span>Sign up List</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ Route('extAffair') }}"><span>External Affairs</span></a></li>
                                <!-- <li><a href="{{ Route('healthHistory') }}"><span>Facilities</span></a></li> -->
                                <!-- <li><a href="{{ Route('accounts') }}"><span>Accounts</span></a></li> -->
                                <li><a href="{{ Route('feedback') }}"><span>Feedback</span></a></li>
                                <li><a href="{{ route('basicTable') }}"><span>Latests</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="fa fa-users"></i> <span>Manage</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="{{ route('addStaff') }}"><span>Add Staff</span></a></li>
                                <li><a href="{{ route('makeAdoption') }}"><span>Make an Adoption</span></a></li>
                                @if(Auth::user()->role == 1 or Auth::user()->role == 2)
                                <li><a href="{{ route('adoptionRequest') }}"><span>Adoption Request</span></a></li>
                                @endif
                                <li><a href="{{ route('volunteerRequest') }}"><span>Volunteer Request</span></a></li>
                                <li><a href="{{ route('approvedRequest') }}"><span>Approved Requests</span></a></li>
                                <li><a href="{{ route('addDonor') }}"><span>Add Contributor</span></a></li>
                            </ul>
                        </li>
                        

                        



                        <li class="has-sub-menu"><a href="#"><i class="fa-solid fa-handshake mt-1"></i> <span>Support</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="chat.html"><span>Chat</span></a></li>
                                <li><a href="mail.html"><span>Mail</span></a></li>
                                <li><a href="single-mail.html"><span>Single Mail</span></a></li>
                                <li><a href="todo-list.html"><span>Todo List</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div>

        <div class="content-body">
@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/adoption.css">

@endsection





<!-- main content starts here -->
@section('content')

<section id="adoption_page">
        <h1>Apply For Adoption</h1>
        <div class="container">
            <!-- =============== Adopter Information ================= -->
            <div class="cont">
                <form action="#" id="form1" method="post">
                    <h3>PERSONAL INFORMATION</h3>
                    <input Name="adptr_name" type="text" placeholder="Full Name" required>
                    <input Name="adptr_email" type="email" placeholder="Email" required>
                    <input Name="adptr_phone" type="tel" placeholder="Mobile" required>
                    <input Name="adptr_ban" type="number" placeholder="Bank Account Number" required>
                    <input Name="adptr_nid" type="number" placeholder="NID Number" required>
                    <input Name="adptr_dob" type="text" placeholder="Date of Birth" required>
                    <input Name="adptr_pr_add" type="text" placeholder="Present Address" required>
                    <input Name="adptr_per_add" type="text" placeholder="Permanent Address" required>
                    <input Name="adptr_roa" type="text" placeholder="Reasons for Adopting Child" required>
    
    
                    
                </form>
    
    
                <!-- =============== Adopt Child Information ================= -->
                <form action="#" id="form2">
                    <h3>ORPHAN'S INFORMATION</h3>
                    <input name="orph_name" type="text" placeholder="Full Name" required>
                    <input name="orph_dob" type="text" placeholder="Date of Birth" required>
                    <input name="orph_fn" type="text" placeholder="Father's Name" required>
                    <input name="orph_mn" type="text" placeholder="Mother's Name" required>
                    <input name="orph_on" type="text" placeholder="Orphanage Name" required>
                    <input name="orph_doa" type="text" placeholder="Date from when he/she admit" required>
                    <input name="orph_oid" type="number" placeholder="ID Number (if known)">
    
    
                    <div class="btn-box">
                        <button name="submit" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection
<!-- main content ends here -->



@section('script')


@endsection
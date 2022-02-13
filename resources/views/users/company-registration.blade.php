<h1>Company Registration</h1>
<form class="" action="{{ route('storeCompany') }}" method="POST">
    @csrf
    <h1>Account Details</h1>
    <label for="email_address">Email Address:<label>
    <input type="email" id="email_address" name="email_address">
    <label for="password">Password:<label>
    <input type="password" id="password" name="password">

    <h1>Company Information</h1>
    <p>Please enter your company information.</p>
    <label for="company_name">Company Name:<label>
    <input type="text" id="company_name" name="company_name">
    <label for="founded">Company Founded:<label>
    <input type="text" id="founded" name="founded">
    <label for="staff_capacity">Staff Capacity:<label>
    <input type="number" id="staff_capacity" name="staff_capacity">

    <h1>Address Details</h1>
    <p>Please enter your company address information.</p>
    <label for="stree_name">Street Name:<label>
    <input type="text" id="street_name" name="street_name">
    <label for="house_number">Building/Office Number:<label>
    <input type="text" id="house_number" name="house_number">
    <label for="postcode">Postcode:<label>
    <input type="text" id="postcode" name="postcode">
    <label for="city">City:<label>
    <input type="text" id="city" name="city">
    <label for="county">County:<label>
    <input type="text" id="county" name="county">

    <button type="submit" class="btn btn-blue">Register</button>

</form>
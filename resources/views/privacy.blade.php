@extends('layouts.app')

@section('content')

@include('header')

<div class="relative bg-lambright-500">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="">
    <div class="absolute inset-0 bg-lambright-500 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Get in touch</h1>
    <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Mattis amet hendrerit dolor, quisque lorem pharetra. Pellentesque lacus nisi urna, arcu sociis eu. Orci vel lectus nisl eget eget ut consectetur. Sit justo viverra non adipisicing elit distinctio.</p>
  </div>
</div>

<!-- Content Centered -->

<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/typography'),
    ],
  }
  ```
-->
<div class="relative bg-white">
  <div class="lg:absolute lg:inset-0">
    <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
      <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" alt="">
    </div>
  </div>
  <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
    <div class="lg:col-start-2 lg:pl-8">
      <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0">
        <h2 class="leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Work with us</h2>
        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Privacy</h3>
        <div class="mt-5 prose prose-indigo text-gray-500">
          <p>Our server automatically recognizes and collects the following information:</p>
          <ul role="list">
          <li>The domain name of pages referring visitors </li>
            <li>Email addresses of those who communicate with us via email</li>
            <li>Email addresses of those who make postings to our blogs</li>
            <li>Aggregate information on what pages consumers access or visit</li>
            <li>Information volunteered by the user, such as survey information and/or site registrations, name and address, telephone number, fax number, payment information (e.g., credit card number and billing address)</li>
          </ul>
          <h3>Email Communication</h3>
          <p>Lambent Consulting/Lambent Outsourcing (Lambent) may send you commercial email messages unless you choose to receive them, with some exceptions. We may send non-commercial email messages, which are not subject to opt-out.</p>
          <p>Lambent may send you emails to (a) conduct online surveys, (b) provide information regarding our company, information regarding our Website (s), marketing information about products and services, and newsletters, confirm orders placed online, and otherwise communicate with you as a customer. </p>
          <h3>Telephone Communication</h3>
          <p>Persons who supply us with their telephone number will only receive telephone contact from us with information regarding queries they have placed online. Please provide us with your name and phone number when requesting information or support. </p>
          <h3>Future Information Use</h3>
          <p>From time to time, we may use customer information for new, unanticipated uses not previously disclosed in our privacy notice. If our information practices change in the future, we will post the policy changes on our Web site to notify you of these changes. We will use only data collected from the time of the policy change forward for these new purposes. If you are concerned about how we use your information, you should periodically check back at our Web site. Customers may prevent their information from being used for purposes other than those for which it was initially collected by emailing us from our “Contact Us” page. </p>
          <h3>Security Measures</h3>
          <p>Lambent Consulting is committed to protecting the information you provide through this Website. This Website is protected with various security measures such as change control procedures and physical access controls (and passwords, as applicable). We also implement other control mechanisms to help protect personally identifiable information you provide through this Website from being lost, misused, or altered inappropriately.</p>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
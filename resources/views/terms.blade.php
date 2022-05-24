@extends('layouts.app')

@section('content')

@include('header')

<div class="relative top-16 bg-lambright-500">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="/images/LAMB-Site-Image-Header_Terms.jpg" alt="">
        <div class="absolute inset-0 bg-lambright-500 mix-blend-multiply" aria-hidden="true"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <h1 class="text-6xl text-left  font-concourset6  leading-tight font-normal tracking-normal text-newcolor-700 capitalize">Terms of Service</h1>
        <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Mattis amet hendrerit dolor, quisque lorem pharetra.
            Pellentesque lacus nisi urna, arcu sociis eu. Orci vel lectus nisl eget eget ut consectetur. Sit justo
            viverra non adipisicing elit distinctio.</p>
    </div>
</div>

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
<div class="relative py-16 bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
        <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
            <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                viewBox="0 0 404 384">
                <defs>
                    <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
            </svg>
            <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384"
                fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                viewBox="0 0 404 384">
                <defs>
                    <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
            </svg>
        </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>

                <span
                    class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Web
                    Site Terms</span>
            </h1>
        </div>
        <div class="mt-6 prose prose-indigo prose-lg font-copy font-normal text-xl tracking-normal leading-relaxed text-lambright-50 normal-case mx-auto">
            <h3>Legal Information</h3>
            <p>Lambent Consulting/Lambent Outsourcing (Lambent) provides services subject to the following notices and
                terms. When you use Lambent’s site services, you are subject to all applicable rules, guidelines,
                policies, and terms.</p>
            <p>This site is provided by Lambent on an “as is” basis. Lambent Consulting makes no representations or
                warranties of any kind, express or implied, as to the site’s operation or the information, content,
                materials, or products included on this site. The entire risk as to the site’s operation and you assume
                any risk for the materials or products obtained or accessed through the site. Lambent Consulting is not
                responsible for the accuracy of the services or the materials or products obtained through or associated
                with this site or for any omissions therein.</p>
            <p>To the full extent permissible by applicable law, Lambent Consulting disclaims all warranties, express or
                implied, including, but not limited to, implied warranties of merchantability and fitness for a
                particular purpose. Lambent Consulting will not be liable for any losses, claims or damages of any kind
                arising out of or in connection with the use of this site, including, but not limited to direct,
                indirect, incidental, punitive, and consequential damages. </p>
            <h3>Copyright</h3>
            <p>All content on this site, including text, graphics, logos, images, and software, is the exclusive
                property of Lambent Consulting or other third parties, and is protected by international copyright laws,
                and/or other intellectual property laws. The content and software on this site may be used as an
                information resource exclusively. Any other use of the content on this site is strictly prohibited and
                may violate international copyright laws, and/or other intellectual property laws. This includes, but is
                not limited to, reproduction, derivative works, modification, distribution, transmission, publication,
                display or performance.</p>
            <h3>Trademarks</h3>
            <p>Lambent Consulting, Lambent Outsourcing, Philippines BPO Maps, Lambent.co, Atelier Lumikha, Lumikha.co,
                and <a href="https://lambent.co/">Lambent.co</a> are trademarks or tradenames of Lambent Consulting.
                Trademarks may not be used or distributed by you without the prior written consent of Lambent
                Consulting. Any unauthorized use of Lambent Consulting is prohibited. Tradenames may not be used in
                connection with any product or service that does not belong to Lambent Consulting or in any manner that
                is likely to cause confusion among customers, or that demeans or discredits Lambent Consulting.</p>
            <h3>Site Usage</h3>
            <p>This site and/or any portion of this site may not be reproduced, duplicated, copied, sold, resold, or
                otherwise exploited for any purpose that Lambent Consulting does not expressly permit. Lambent
                Consulting and its affiliates reserve the right to refuse service, and/or terminate accounts at its sole
                discretion, including, without limitation, if Lambent Consulting Solutions believes that customer
                conduct violates applicable law or is harmful to the interests of Lambent Consulting.</p>
        </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span
                    class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Business
                    Process Outsourcing Services Terms</span>
            </h1>
        </div>
        <div class="mt-6 prose prose-indigo prose-lg font-copy font-normal text-xl tracking-normal leading-relaxed text-lambright-50 normal-case mx-auto">
            <h3>Program Term </h3>
            <p>This Service Agreement is effective from the date listed on the Statement of Work (SoW) as the start date
                and continues for one year from that date. This period is the initial term. </p>
            <p>Either party can terminate this agreement by emailing notice to the other party at least thirty days
                before the last day of the initial term.</p>
            <h3>Automatic Renewal</h3>
            <p>The SoW and the Service Agreement automatically renew for additional periods of one year, after the
                initial term.</p>
        </div>
    </div>

    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span
                    class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Compensation</span>
            </h1>
        </div>
        <div class="mt-6 prose prose-indigo prose-lg font-copy font-normal text-xl tracking-normal leading-relaxed text-lambright-50 normal-case mx-auto">
            <h3>How We Calculate Payment </h3>
            <p>Each resource is billed for 32 hours/week multiplied by their hourly rate unless otherwise noted.
                Invoices are submitted monthly and denominated in USD.  </p>
            <p>The hourly rate is calculated based on the complexity of the tasks you assign to a billable resource.  
            </p>
            <p>Occasionally programs change. As schedules or task assignments change; we update your SoW to reflect
                these changes.  </p>
            <p>The updates may have financial implications based on the complexity of the program or schedule updates
                that necessitate frequent overtime compensation for the people assigned to the program.   </p>
            <h3>Payment Schedule & Reconciliation</h3>
            <p>We invoice in advance of services rendered. When there is a discrepancy between the hours invoiced and
                the hours worked, the discrepancy will be credited on the following invoice. </p>
            <h3>Overtime</h3>
            <p>When you require overtime beyond the scope of the SoW, you are obliged to pay for the overtime hours
                according to the following computation as mandated by the Philippines labor code:  </p>
            <div class="relative shadow-md mt-3 sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ≤8 hours
                            </th>
                            <th scope="col" class="px-6 py-3">
                                >8 hours
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                Ordinary Day
                            </th>
                            <td class="px-6 py-4">
                                Scheduled workday
                            </td>
                            <td class="px-6 py-4">
                                100%
                            </td>
                            <td class="px-6 py-4">
                                125%
                            </td>

                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                Rest Day
                            </th>
                            <td class="px-6 py-4">
                                Scheduled day(s) off
                            </td>
                            <td class="px-6 py-4">
                                130%
                            </td>
                            <td class="px-6 py-4">
                                169%
                            </td>

                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                Regular Holiday 
                            </th>
                            <td class="px-6 py-4">
                                Scheduled national holidays
                            </td>
                            <td class="px-6 py-4">
                                130%
                            </td>
                            <td class="px-6 py-4">
                                260%
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <p>You are not required to pay overtime for the work schedule defined in the SoW. If the program schedule
                changes, this will be reflected in an updated SoW.</p>
            <h3>Annual Escalation for Tenured Staff</h3>
            <p>Because we take a long view of our program engagements employees bring significant value over time, we
                charge more for tenured staff according to the following escalation:</p>

            <div class="relative shadow-md mt-3 sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Year 1
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Year 2
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Year 3
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Year 4
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Year 5
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Year 6+
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                5%
                            </th>
                            <td class="px-6 py-4">
                                15%
                            </td>
                            <td class="px-6 py-4">
                                5%
                            </td>
                            <td class="px-6 py-4">
                                5%
                            </td>
                            <td class="px-6 py-4">
                                5%
                            </td>
                            <td class="px-6 py-4">
                                2.5%
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
                <p>We apply the annual increase to the hourly rate on the anniversary of your assigned resource’s
                    certification to the program.</p>
                <h3>Program Incentives </h3>
                <p>Because back-office processes are more successful when we motivate your team with graduated
                    incentives for the programs we manage. </p>
                <p>We develop these incentives during the first 30-60 after your program launches. The incentives vary
                    so we like to understand your program thoroughly before we propose an incentive plan.  </p>
                <p>Together, we devise incentive plans to reach your objectives and to maximize the program’s value. The
                    incentives are included in the monthly invoice, subject to approval.  </p>
                <h3>Additional Fees</h3>
                <p>You agree to pay for any reasonable and actual business expenditure incurred by us at your direction.
                    These might include, for example, third party, licensed software, telecommunications charges, web
                    hosting, domains and privacy, or specialized computer hardware. </p>
        </div>

  
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span
                    class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Termination</span>
            </h1>
        </div>
        <div class="mt-6 prose prose-indigo prose-lg font-copy font-normal text-xl tracking-normal leading-relaxed text-lambright-50 normal-case mx-auto">
            <h3>Pre-termination</h3>
            <p>Either party may terminate this Agreement by giving at least thirty (30) days’ written notification.</p>
            <h3>Non-payment</h3>
            <p>Should you fail to pay the compensation defined in the accompanying SoW that is not the subject of a good faith dispute within thirty (30) days of the date due, we may terminate this agreement and the associated SoW.</p>
        </div>
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span
                    class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">General Terms</span>
            </h1>
        </div>
        <div class="mt-6 prose prose-indigo prose-lg font-copy font-normal text-xl tracking-normal leading-relaxed text-lambright-50 normal-case mx-auto">
            <h3>Business Conduct</h3>
            <p>We both agree to conduct our businesses and operations to maintain and increase the goodwill and reputation of all. Any violation of this may constitute a ground for termination of this agreement.</p>
            <h3>Confidentiality</h3>
            <p>Both organizations, their employees, or any person acting for either organization will not disclose any information obtained in the course of our business relationship unless specifically authorized by the relevant parties. </p>
            <p>This obligation of confidentiality shall survive the termination of this agreement.  </p>
            <h3>Non-competition</h3>
            <p>We both agree not to contract with the clients or direct competitors without written consent for the duration of our business relationship and for a period of one year after our business relationship concludes — unless the client or competitor relationship predates the Agreement. </p>
            <h3>N​on–solicitation</h3>
            <p>You agree not to solicit, induce, or encourage directly or indirectly any of our employees to leave the company while this Agreement is in effect and for one year after the date of completion of the Agreement.  </p>
            <h3>Non-binding Clause</h3>
            <p>You have no authority to bind Lambent by any promise or representation unless specifically authorized in writing by Lambent </p>
            <h3>Mutual Marketing Provision</h3>
            <p>Unless otherwise stated each party may use non-confidential information for marketing purposes.</p>
            <h3>Notice </h3>
            <p>Notices will be handled by email and are understood to be delivered upon email reply via from the recipient or confirmed by third-party software. </p>
            <h3>Force Majeure </h3>
            <p>Neither party shall be liable for the delay or failure of performance caused by force majeure such as fire, explosion, accident, strike or other similar acts of God. This Agreement will be suspended for the duration of the event and resume when force majeure has ceased.  </p>


            
        </div>
    </div>

    </div>
</div>


@endsection

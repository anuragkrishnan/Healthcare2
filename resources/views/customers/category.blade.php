 <div class="container-fluid mt-3">

     <div class="row cc-form-row">

         <!-- LEFT TREE PANEL-->

         <div class="col-lg-5 col-xl-4">

             <div class="card-section card">

                 <div class="card-header d-flex justify-content-between align-items-center">

                     <h5 class="mb-0">
                         Customer Category
                     </h5>

                     <button class="btn btn-primary btn-sm" id="btnNew">

                         <i class="fa fa-plus"></i>

                         New

                     </button>

                 </div>

                 <div class="card-body p-2">

                     <input type="text" class="form-control mb-2" id="treeSearch" placeholder="Filter">

                     <div id="customerTree"></div>

                 </div>

             </div>

         </div>

         <!--RIGHT FORM PANEL-->

         <div class="col-md-8 col-xl-8">

             <div class=" card-section">

                 <div class="card-header">

                     <h5 class="mb-0">

                         View Customer Category

                     </h5>

                 </div>

                 <div class="card-body form-container">

                     <form id="customerCategoryForm">

                         <input type="hidden" id="categoryId">

                         <div class="grid-3-col">

                             <!-- LEFT COLUMN -->
                             <div>

                                 <div class="form-group">
                                     <label>Parent Name</label>
                                     <input type="text" id="parentCategory" class="form-control" readonly>
                                 </div>

                                 <div class="form-group">
                                     <label>
                                         Code
                                         <span class="text-danger">*</span>
                                     </label>

                                     <input type="text" id="code" class="form-control">
                                 </div>

                                 <div class="form-group">
                                     <label>
                                         Description
                                         <span class="text-danger">*</span>
                                     </label>

                                     <input type="text" id="description" class="form-control">
                                 </div>

                                 <div class="form-group">
                                     <label>Arabic Name</label>

                                     <input type="text" id="arabicName" class="form-control">
                                 </div>



                             </div>


                             <!-- MIDDLE COLUMN -->
                             <div>

                                 <div class="form-group">
                                     <label>Type</label>

                                     <div class="d-flex gap-3 mt-2">

                                         <label class="form-check">

                                             <input class="form-check-input" type="radio" name="categoryType"
                                                 id="cashType" value="Cash">

                                             Cash

                                         </label>

                                         <label class="form-check">

                                             <input class="form-check-input" type="radio" name="categoryType"
                                                 id="corporateType" value="Corporate">

                                             Corporate

                                         </label>

                                         <label class="form-check">

                                             <input class="form-check-input" type="radio" name="categoryType"
                                                 id="insuranceType" value="Insurance">

                                             Insurance

                                         </label>

                                     </div>

                                 </div>

                                 <!-- Address 1 -->
                                 <div class="row cc-form-row mb-3">
                                     <label class="col-md-3 col-form-label">
                                         Address 1
                                     </label>

                                     <div class="col-md-9">
                                         <input type="text" id="address1" class="form-control">
                                     </div>
                                 </div>

                                 <!-- Address 2 -->
                                 <div class="row cc-form-row mb-3">
                                     <label class="col-md-3 col-form-label">
                                         Address 2
                                     </label>

                                     <div class="col-md-9">
                                         <input type="text" id="address2" class="form-control">
                                     </div>
                                 </div>

                                 <!-- Address 3 -->
                                 <div class="row cc-form-row mb-3">
                                     <label class="col-md-3 col-form-label">
                                         Address 3
                                     </label>

                                     <div class="col-md-9">
                                         <input type="text" id="address3" class="form-control">
                                     </div>
                                 </div>

                                 <!-- Address 4 -->
                                 <div class="row cc-form-row mb-3">
                                     <label class="col-md-3 col-form-label">
                                         Address 4
                                     </label>

                                     <div class="col-md-9">
                                         <input type="text" id="address4" class="form-control">
                                     </div>
                                 </div>

                             </div>


                             <!-- RIGHT COLUMN -->
                             <div>

                                 <div class="form-group">

                                     <label>Building No</label>

                                     <input type="text" id="buildingNo" class="form-control">

                                 </div>

                                 <div class="form-group">

                                     <label>Street Name</label>

                                     <input type="text" id="streetName" class="form-control">

                                 </div>

                                 <div class="form-group">

                                     <label>City</label>

                                     <input type="text" id="city" class="form-control">

                                 </div>

                                 <div class="form-group">

                                     <label>District</label>

                                     <input type="text" id="district" class="form-control">

                                 </div>

                                 <div class="form-group">

                                     <label>Postal Code</label>

                                     <input type="text" id="postalCode" class="form-control">

                                 </div>

                                 <div class="form-group">

                                     <label>Tax Reg No</label>

                                     <input type="text" id="taxRegNo" class="form-control">

                                 </div>

                             </div>
                             <div class="row g-3 mb-3">

                                 <div class="col-md-6">
                                     <label class="form-label mb-1">Payer ID</label>
                                     <input type="text" id="payerId" class="form-control form-control-sm">
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label mb-1">Discount %</label>
                                     <input type="number" id="discount" class="form-control form-control-sm">
                                 </div>

                             </div>

                             <!-- Provider / TPA -->
                             <div class="row g-3">

                                 <div class="col-md-6">
                                     <label class="form-label mb-1">Provider ID</label>
                                     <input type="text" id="providerId" class="form-control form-control-sm">
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label mb-1">TPA ID</label>
                                     <input type="text" id="tpaId" class="form-control form-control-sm">
                                 </div>

                             </div>
                             <div class="modal-footer">



                                 <button id="btnSucs" type="submit" class="btn btn-success">

                                     Save

                                 </button>

                             </div>
                         </div>

                 </div>


             </div>

         </div>

     </div>

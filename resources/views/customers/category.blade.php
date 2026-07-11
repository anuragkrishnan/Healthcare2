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
     <script>
         /* ==========================================================
                       CUSTOMER CATEGORY DATA
                    ========================================================== */

         const customerCategoryTree = [

             {
                 id: 1,
                 parent: null,
                 name: "CASH",
                 type: "Cash",
                 folder: false
             },

             {
                 id: 2,
                 parent: null,
                 name: "CREDIT",
                 type: "Corporate",
                 folder: false
             },

             {
                 id: 3,
                 parent: null,
                 name: "INSURANCE CUSTOMER",
                 folder: true
             },

             {
                 id: 4,
                 parent: 3,
                 name: "NCCI",
                 type: "Insurance",
                 folder: false,

                 code: "INS01",
                 description: "NCCI",
                 arabic: "إن سي سي",

                 address1: "Jeddah",
                 address2: "",
                 address3: "",
                 address4: "",

                 buildingNo: "200",
                 streetName: "King Road",
                 city: "Jeddah",
                 district: "North",
                 postalCode: "21411",

                 taxRegNo: "111111",

                 payerId: "900",
                 providerId: "22000",
                 tpaId: "8",

                 discount: "0"
             },

             {
                 id: 5,
                 parent: 3,
                 name: "BUPA",
                 type: "Insurance",
                 folder: false,

                 code: "INS02",
                 description: "BUPA",
                 arabic: "بوبا",

                 address1: "3500 Ar Rawdah Street",
                 address2: "Jeddah 23423",
                 address3: "Makkah Region",
                 address4: "Al Khalidiya",

                 buildingNo: "3772",
                 streetName: "Ar Rawdah",
                 city: "Jeddah",
                 district: "Al Khalidiya",
                 postalCode: "23423",

                 taxRegNo: "987654",

                 payerId: "960",
                 providerId: "22966",
                 tpaId: "9",

                 discount: "0"
             },

             {
                 id: 6,
                 parent: 3,
                 name: "GLOBMED",
                 folder: true
             },

             {
                 id: 7,
                 parent: 6,
                 name: "WALAA-GMED",
                 folder: false,

                 type: "Insurance",
                 code: "GM01",
                 description: "WALAA GMED"
             },

             {
                 id: 8,
                 parent: 6,
                 name: "SOLIDARITY-GMED",
                 folder: false,

                 type: "Insurance",
                 code: "GM02",
                 description: "SOLIDARITY GMED"
             },

             {
                 id: 9,
                 parent: 6,
                 name: "ARABIA-GMED",
                 folder: false,

                 type: "Insurance",
                 code: "GM03",
                 description: "ARABIA GMED"
             },

             {
                 id: 10,
                 parent: 6,
                 name: "SALAMA-GMED",
                 folder: false,

                 type: "Insurance",
                 code: "GM04",
                 description: "SALAMA GMED"
             }

         ];

         /* ================================
             CUSTOMER CATEGORY SEARCH
          ================================ */

         $("#treeSearch").on("keyup", function() {

             let value = $(this).val().toLowerCase();

             if (value === "") {
                 $("#customerTree li").show();
                 return;
             }

             $("#customerTree li").hide();

             $("#customerTree .cc-row").each(function() {

                 let text = $(this).text().toLowerCase();

                 if (text.indexOf(value) > -1) {

                     $(this).closest("li").show();

                     $(this).parents("li").show();

                     $(this).parents(".cc-child").show();

                     $(this).parents(".cc-child").prev(".cc-folder")
                         .find(".cc-arrow")
                         .removeClass("fa-caret-right")
                         .addClass("fa-caret-down");

                 }

             });

         });

         /* ==========================================================
             BUILD CUSTOMER CATEGORY TREE
          ========================================================== */

         function buildCustomerTree(parent = null) {

             let html = '<ul class="cc-tree">';

             customerCategoryTree
                 .filter(item => item.parent === parent)
                 .forEach(item => {

                     const hasChildren = customerCategoryTree.some(x => x.parent === item.id);

                     html += `
                <li>

                    <div class="cc-row ${hasChildren ? 'cc-folder' : 'cc-company'}"
                         data-id="${item.id}">

                        <div class="cc-left">

                            ${hasChildren
                                ? '<i class="fa fa-caret-right cc-arrow me-2"></i>'
                                : '<span class="cc-empty"></span>'
                            }

                            <i class="fa ${hasChildren ? 'fa-folder-open text-warning' : 'fa-file text-primary'} me-2"></i>

                            <span class="form-label mb-0">${item.name}</span>

                        </div>

                    </div>

                    ${hasChildren
                        ? `<div class="cc-child" style="display:none">
                                          ${buildCustomerTree(item.id)}
                                     </div>`
                        : ""
                    }

                </li>
            `;

                 });

             html += "</ul>";

             return html;
         }


         /* ==========================================================
            INITIALIZE CUSTOMER CATEGORY
         ========================================================== */

         function initCustomerCategory() {

             if (!$("#customerTree").length) {
                 return;
             }

             $("#customerTree").html(buildCustomerTree());

             $("#customerTree")
                 .off("click", ".cc-folder")
                 .on("click", ".cc-folder", function(e) {

                     e.stopPropagation();

                     $(this)
                         .next(".cc-child")
                         .stop(true, true)
                         .slideToggle(200);

                     $(this)
                         .find(".cc-arrow")
                         .toggleClass("fa-caret-right fa-caret-down");

                 });


             $("#customerTree")
                 .off("click", ".cc-company")
                 .on("click", ".cc-company", function() {

                     $(".cc-row").removeClass("cc-selected");

                     $(this).addClass("cc-selected");

                     const id = $(this).data("id");

                     const company = customerCategoryTree.find(x => x.id == id);

                     if (company) {
                         loadCustomerCategory(company);
                     }

                 });

         }
         /* ==========================================================
            LOAD CUSTOMER CATEGORY DETAILS
         ========================================================== */

         function loadCustomerCategory(data) {

             let parentName = "";

             if (data.parent != null) {

                 const parent = customerCategoryTree.find(x => x.id == data.parent);

                 if (parent) {
                     parentName = parent.name;
                 }
             }

             $("#categoryId").val(data.id || "");
             $("#parentCategory").val(parentName);

             $("#code").val(data.code || "");
             $("#description").val(data.description || "");
             $("#arabicName").val(data.arabic || "");

             $("#address1").val(data.address1 || "");
             $("#address2").val(data.address2 || "");
             $("#address3").val(data.address3 || "");
             $("#address4").val(data.address4 || "");

             $("#buildingNo").val(data.buildingNo || "");
             $("#streetName").val(data.streetName || "");
             $("#city").val(data.city || "");
             $("#district").val(data.district || "");
             $("#postalCode").val(data.postalCode || "");
             $("#taxRegNo").val(data.taxRegNo || "");

             $("#payerId").val(data.payerId || "");
             $("#providerId").val(data.providerId || "");
             $("#tpaId").val(data.tpaId || "");
             $("#discount").val(data.discount || "");

             $("input[name='categoryType']").prop("checked", false);

             if (data.type) {
                 $("input[name='categoryType'][value='" + data.type + "']")
                     .prop("checked", true);
             }
         }


         /* ==========================================================
            NEW BUTTON
         ========================================================== */

         $(document).on("click", "#btnNew", function() {

             const form = $("#customerCategoryForm")[0];

             if (form) {
                 form.reset();
             }

             $("#categoryId").val("");
             $("#parentCategory").val("");

             $(".cc-row").removeClass("cc-selected");

         });


         /* ==========================================================
            EDIT ICON
         ========================================================== */

         $(document).on("click", "#customerTree .fa-edit", function(e) {

             e.stopPropagation();

             $(this).closest(".cc-company").trigger("click");

         });


         /* ==========================================================
            DELETE ICON
         ========================================================== */

         $(document).on("click", "#customerTree .fa-trash", function(e) {

             e.stopPropagation();

             if (confirm("Delete this category?")) {

                 $(this).closest("li").remove();

             }

         });


         /* ==========================================================
            INITIALIZE PAGE
         ========================================================== */

         $(function() {

             initCustomerCategory();

         });


         /* ==========================================================
            TREE SEARCH
         ========================================================== */

         $(document).on("keyup", "#treeSearch", function() {

             let value = $(this).val().toLowerCase();

             if (value === "") {

                 $("#customerTree").html(buildCustomerTree());

                 initCustomerCategory();

                 return;
             }

             $("#customerTree .cc-row").each(function() {

                 const text = $(this).text().toLowerCase();

                 if (text.indexOf(value) > -1) {

                     $(this).closest("li").show();

                     $(this).parents("li").show();

                     $(this).parents(".cc-child").show();

                     $(this).parents(".cc-child")
                         .prev(".cc-folder")
                         .find(".cc-arrow")
                         .removeClass("fa-caret-right")
                         .addClass("fa-caret-down");

                 } else {

                     $(this).closest("li").hide();

                 }

             });

         });
     </script>

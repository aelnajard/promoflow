<style media="screen">
.buttonPlusOrder {
  position: absolute;
  width: 25px;
  height: 21px;
  top:50%;
  right:10px;
  transform: translateY(-50%);
  cursor: pointer;
  }
.buttonLessOrder{
  position: absolute;
  width: 25px;
  height: 11px;
  top:50%;
  right: 10px;
  transform: translateY(-50%);
  cursor: pointer;
  display: none;
  }

  .containerItemsOrder{
    position: relative;
    width: 100%;
  }
  .itemOrder{
    position: relative;
    width: 100%;
    height: 40px;
    background-color: rgba(47, 69, 96, 1);
    border: 1px solid black;
  }
  .itemOrder h3{
    position: relative;
    text-align: center;
    color: white;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1em;
    font-weight: 400;
  }
  .openToggleSubitemOrder{
    position: absolute;
    width: 40px;
    height: 100%;
    top: 0px;
    right: 0px;
  }



  .containerItemJob{
    position: relative;
    width: 100%;
  }
  .itemJob{
    position: relative;
    width: 100%;
    padding: 4px;
    background-color: rgba(47, 69, 96, 0.7);
    border: 1px solid black;
  }
  .itemJob h3{
    position: relative;
    text-align: center;
    color: white;
    font-size: 1em;
    font-weight: 400;
  }
  .openToggleSubitemJob{
    position: absolute;
    width: 30px;
    height: 100%;
    top: 0px;
    right: 10px;
  }
  .buttonPlusJob {
    position: absolute;
    width: 17px;
    height: 21px;
    top:50%;
    right:10px;
    transform: translateY(-50%);
    cursor: pointer;
    }
  .buttonLessJob{
    position: absolute;
    width: 17px;
    height: 11px;
    top:50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    display: none;
    }




    .containerItemContent{
      position: relative;
      width: 100%;
    }
    .itemContent{
      position: relative;
      width: 100%;
      padding: 4px;
      background-color: rgba(47, 69, 96, 0.3);
      border: 1px solid black;
    }
    .itemContent h3{
      position: relative;
      text-align: center;
      width: 85%;
      left: 50%;
      transform: translateX(-50%);
      color: white;
      font-size: 1em;
      font-weight: 400;
    }
    .openToggleSubitemContent{
      position: absolute;
      width: 30px;
      height: 100%;
      top: 0px;
      right: 10px;
    }
    .buttonPlusContent {
      position: absolute;
      width: 17px;
      height: 21px;
      top:50%;
      right:10px;
      transform: translateY(-50%);
      cursor: pointer;
      }
    .buttonLessContent{
      position: absolute;
      width: 17px;
      height: 11px;
      top:50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      display: none;
      }









  .containerSubitemOrder{
    position: relative;
    width: 100%;
  }
  .subitemOrder{
    position: relative;
    width: 100%;
    padding: 4px;
    background-color: rgba(230, 240, 245, 1);
    border: 1px solid black;
  }
  .subitemOrder h3{
    position: relative;
    text-align: left;
    color: black;
    font-weight: 300;
    font-size: 0.95em;
    font-weight: 300;
    width: 90%;
    left: 50%;
    transform: translateX(-50%);
  }





  .containerSubitemOrder2{
    position: relative;
    width: 100%;
  }
  .subitemOrder2{
    position: relative;
    width: 100%;
    padding: 4px;
    background-color: rgba(230, 240, 245, 0.9);
    border: 1px solid black;
  }
  .subitemOrder2 h3{
    position: relative;
    text-align: left;
    color: black;
    font-weight: 300;
    font-size: 0.95em;
    font-weight: 300;
    width: 90%;
    left: 50%;
    transform: translateX(-50%);
  }
  .buttonPlusOrder2 {
    position: absolute;
    width: 25px;
    height: 21px;
    top:50%;
    right:10px;
    transform: translateY(-50%);
    cursor: pointer;
    }
  .buttonLessOrder2{
    position: absolute;
    width: 25px;
    height: 11px;
    top:50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    display: none;
    }
  .openToggleSubitemOrder2{
    position: absolute;
    width: 40px;
    height: 100%;
    top: 0px;
    right: 0px;
  }

</style>
<!--  Table 1  -->

<div class="containerTableW3P">
  <div id="containerOrders" class="containerCenterTable">


<!--
    <div class="containerItemsOrder">

      <div class="itemOrder">
        <h3>Order: 2023-04-05</h3>
        <div class="openToggleSubitemOrder">
          <img  class="buttonPlusOrder"src="../2-2-Orders/Images/mas.png" alt="">
          <img  class="buttonLessOrder"src="../2-2-Orders/Images/menos.png" alt="">
        </div>
      </div>
      <div class="containersSubitemOrder">

      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Id:</strong> 234535</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Status:</strong> 081</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Customer:</strong> OEBATH24</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Contact:</strong> 1542200</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Quantity_allocated:</strong> 250</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Quantity_printed:</strong> 0</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Quantity_despatched:</strong> 0</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Total_transfer:</strong> 833.80</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Total_selling:</strong> 1072.26</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Total:</strong> 1286.71</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Product_code:</strong> YKAMPS2</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Client_reference:</strong> Branded Bags</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Total_prcost:</strong> 647.50</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Title: REO: REP:</strong> Branded bags</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Category:</strong> 993</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Quantity:</strong> 250</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Auto081:</strong> false</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Service:</strong> N</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Supplier_reference:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Reprintof:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Reprintas:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Reorderof:</strong> 5154580</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Reorderas:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Product_name:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Spec:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Turnaround:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Schedule:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Weight:</strong> 0.000</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>status_text:</strong> PDF'd and sent</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Status_note:</strong> </h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Height:</strong> 230.0000</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Width:</strong> 380.0000</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Bleed:</strong> 0.0000</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>Reseller_workgroup:</strong> F331</h3>
        </div>
      </div>








      <div class="containerSubitemOrder">

        <div class="subitemOrder">
          <h3><strong>Reseller_details:</strong> </h3>
          <div class="openToggleSubitemOrder2">
            <img  class="buttonPlusOrder2"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessOrder2"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>

        <div class="containersSubitemOrder2">

        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>Code:</strong> FRMBEB</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>Name:</strong>printing.com @ Mail Boxes Etc</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr1:</strong>Revent Bath Ltd.</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr2:</strong>3 Edgar Buildings</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr3:</strong>George Street</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr4:</strong>Bath</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr5:</strong></h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr6:</strong>United Kingdom</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>postcode:</strong>BA1 2FJ</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>countrycode:</strong>GB</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>main_contact_firstname:</strong>Zoltan</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>main_contact_surname:</strong>Sagi</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>main_contact_title:</strong>null</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>main_contact_email:</strong>zoltan@mbebath.co.uk</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>main_contact_telephone:</strong>null</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>invoice_contact_firstname:</strong>Zoltan</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>invoice_contact_surname:</strong>Sagi</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>invoice_contact_title:</strong>null</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>invoice_contact_email:</strong>zoltan@mbebath.co.uk</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>invoice_contact_telephone:</strong>null</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>vat_number:</strong>81819487</h3>
          </div>
        </div>

      </div>

      </div>




      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>product_spec:</strong> Maple copse paper bag - SMALL<br>195 gsm coated art paper + Matt laminated<br>Litho printed - 2 colour<br>Finished size(mm): maple: 230(w) x 100(d) x 380(h)<br>Hand finished, reinforced top and card base, folded, rope handles hand knotted<br>Max carrying load 4kg<br>Do not get wet</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>product_design:</strong> This bag is printed as a flat sheet, laminated, cut and then folded. Please use the templates provided to position your artwork. Bags can be printed full coverage. We recommend keeping critical text and graphics out of the marked quiet areas to avoid distortion. Text can be added to the reinforced turnover top, but take care to rotate it in the artwork so it appears the right way up when finished. Large areas of flat colour are best produced as Pantone spot colours.<br> <br><br><b>Product guidelines</b> can be found in Flyerlink Resources article number: <a href=" http://www.flyerlink.com/res_art_va_mainview.php?resarticle_code=2211">2211</a><br><b>Design templates</b> can be found in Flyerlink Resources article number: <a href=" http://www.flyerlink.com/res_art_va_mainview.php?resarticle_code=1696">1696</a></h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>product_special:</strong> The bag can be printed 100% on external sides</h3>
        </div>
      </div>

      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>product_partner_code:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>prod_workgroup:</strong>NKA1 </h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>complete:</strong>no </h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>multifile:</strong>yes </h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>expected_despatch_date:</strong> 17\/05\/2023</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>front_filename:</strong> 5502878_A01.EPS</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>reverse_filename:</strong>null </h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>fee_charged_on_job:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>pages:</strong> 1</h3>
        </div>
      </div>




      <div class="containerSubitemOrder">

        <div class="subitemOrder">
          <h3><strong>addresses:</strong> </h3>
          <div class="openToggleSubitemOrder2">
            <img  class="buttonPlusOrder2"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessOrder2"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>

        <div class="containersSubitemOrder2">

        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>name:</strong> Bath Spa Dentistry</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr1:</strong> </h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr2:</strong> </h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr3:</strong> </h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr4:</strong> Bath</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr5:</strong> Avon</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>addr6:</strong> United Kingdom</h3>
          </div>
        </div><div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>postcode:</strong>BA1 2BT </h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>countrycode:</strong> GB</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>contact:</strong> Lisa  Jones</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>telephone:</strong> 01225 464346</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>email:</strong> reception@bathspadentistry.com</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>best_name:</strong> Bath Spa Dentistry</h3>
          </div>
        </div><div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>country:</strong> United Kingdom</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>quantity:</strong> 250</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>despatch_method:</strong> NP</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>despatch_method_name:</strong> Works maker : UK Mainland</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>despatch_customer_code:</strong> OEBATH24</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>despatch_customer_address_id:</strong> </h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>line:</strong> 6780443</h3>
          </div>
        </div>


      </div>
      </div>




      <div class="containerSubitemOrder">

        <div class="subitemOrder">
          <h3><strong>revenue:</strong> </h3>
          <div class="openToggleSubitemOrder2">
            <img  class="buttonPlusOrder2"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessOrder2"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>

        <div class="containersSubitemOrder2">

        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>id:</strong> 13227951</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>costing:</strong> NPC</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>quantity:</strong> 250</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>units:</strong> 1</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>unitcost:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>unitrev:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>cost:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>revenue:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>unitprcost:</strong> 0.000.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>vat:</strong> 20.000</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>vatcode:</strong> 1</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>vattotal:</strong> 0.000</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_territory:</strong> GBNI</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_vatcode:</strong> 1</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_vat:</strong> 20.000</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_invoice:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_unit_invoice:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_invoice_vattotal:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>revenuesetup:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>costsetup:</strong> 0.00</h3>
          </div>
        </div><div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcostsetup:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>name:</strong> Delivery Included</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>customname:</strong> </h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>voucher:</strong> f</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>template:</strong> f</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>wgcosting_id:</strong> null</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>sage50_code:</strong> 1</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>sageone_code:</strong> null</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>xero_code:</strong> OUTPUT2</h3>
          </div>
        </div>



      </div>

      </div>




      <div class="containerSubitemOrder">

        <div class="subitemOrder">
          <h3><strong>revenue:</strong> </h3>
          <div class="openToggleSubitemOrder2">
            <img  class="buttonPlusOrder2"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessOrder2"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>

        <div class="containersSubitemOrder2">

        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>id:</strong> 13204242</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>costing:</strong> PR</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>quantity:</strong> 250</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>units:</strong> 250</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>unitcost:</strong> 833.80</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>unitrev:</strong> 1072.26</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>cost:</strong> 833.80</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>revenue:</strong> 1072.26</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost:</strong> 647.50</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>unitprcost:</strong> 647.50</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>vat:</strong> 20.000</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>vatcode:</strong> 1</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>vattotal:</strong> 214.452</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_territory:</strong> GBNI</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_vatcode:</strong> 1</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_vat:</strong> 20.000</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_invoice:</strong> 647.50</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_unit_invoice:</strong> 647.50</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcost_invoice_vattotal:</strong> 129.50</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>revenuesetup:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>costsetup:</strong> 0.00</h3>
          </div>
        </div><div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>prcostsetup:</strong> 0.00</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>name:</strong> Printing</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>customname:</strong> null</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>voucher:</strong> f</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>template:</strong> f</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>wgcosting_id:</strong> null</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>sage50_code:</strong> 1</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>sageone_code:</strong> null</h3>
          </div>
        </div>
        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>xero_code:</strong> OUTPUT2</h3>
          </div>
        </div>



      </div>
      </div>



      <div class="containerSubitemOrder">

        <div class="subitemOrder">
          <h3><strong>notes:</strong> </h3>
          <div class="openToggleSubitemOrder2">
            <img  class="buttonPlusOrder2"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessOrder2"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>

        <div class="containersSubitemOrder2">

        <div class="containerSubitemOrder2">
          <div class="subitemOrder2">
            <h3><strong>brief:</strong> null</h3>
          </div>
        </div>

      </div>
      </div>







      <div class="containerSubitemOrder">

        <div class="subitemOrder">
          <h3><strong>finishes:</strong> </h3>
          <div class="openToggleSubitemOrder2">
            <img  class="buttonPlusOrder2"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessOrder2"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>

        <div class="containersSubitemOrder2">
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>id:</strong> NKASHWHT</h3>
            </div>
          </div>
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>quantity:</strong> 250</h3>
            </div>
          </div>
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>name:</strong> White Rope Handles - short</h3>
            </div>
          </div>
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>memo:</strong> </h3>
            </div>
          </div>
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>finish_design_instructions:</strong><br> </h3>
            </div>
          </div>
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>production_instructions:</strong> <br></h3>
            </div>
          </div>
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>customer_memo:</strong> <div></div></h3>
            </div>
          </div>


      </div>

      </div>








      <div class="containerSubitemOrder">

        <div class="subitemOrder">
          <h3><strong>orientation:</strong> </h3>
          <div class="openToggleSubitemOrder2">
            <img  class="buttonPlusOrder2"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessOrder2"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>

        <div class="containersSubitemOrder2">
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>front:</strong> Portrait</h3>
            </div>
          </div>
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>back:</strong> Portrait</h3>
            </div>
          </div>


      </div>

      </div>










      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>order_code:</strong> null</h3>
        </div>
      </div>
      <div class="containerSubitemOrder">
        <div class="subitemOrder">
          <h3><strong>package_code:</strong> null</h3>
        </div>
      </div>



      <div class="containerSubitemOrder">

        <div class="subitemOrder">
          <h3><strong>jobmaker_pack:</strong> </h3>
          <div class="openToggleSubitemOrder2">
            <img  class="buttonPlusOrder2"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessOrder2"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>

        <div class="containersSubitemOrder2">
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>full_pack:</strong> https://dev-7.flyerlink.com/api.php/jobs/5502878/jobmaker</h3>
            </div>
          </div>
        <div class="containersSubitemOrder2">
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>orderlist_csv:</strong> https://dev-7.flyerlink.com/api.php/jobs/5502878/jobmaker?file=csv</h3>
            </div>
          </div>
        </div>
        <div class="containersSubitemOrder2">
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>orderlist_xml:</strong> https://dev-7.flyerlink.com/api.php/jobs/5502878/jobmaker?file=xml</h3>
            </div>
          </div>
        </div>
        <div class="containersSubitemOrder2">
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>worksheet:</strong> https://dev-7.flyerlink.com/api.php/jobs/5502878/jobmaker?file=sheet</h3>
            </div>
          </div>
        </div>
        <div class="containersSubitemOrder2">
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>packing_slip_draft:</strong> https://dev-7.flyerlink.com/api.php/jobs/5502878/jobmaker?file=slip</h3>
            </div>
          </div>
        </div>
        <div class="containersSubitemOrder2">
          <div class="containerSubitemOrder2">
            <div class="subitemOrder2">
              <h3><strong>artwork:</strong> <a href="https://dev-7.flyerlink.com/api.php/jobs/5502878/jobmaker?file=pdf">Link</a></h3>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    </div>
-->


</div>
</div>


<script type="text/javascript">

/*

const openToggleSubitemOrder = document.querySelectorAll(".openToggleSubitemOrder");

const buttonPlusOrder = document.querySelectorAll(".buttonPlusOrder");
const buttonLessOrder = document.querySelectorAll(".buttonLessOrder");
const containersSubitemOrder = document.querySelectorAll(".containersSubitemOrder");

for (let i = 0; i < openToggleSubitemOrder.length; i++) {
  openToggleSubitemOrder[i].addEventListener("click", function(){
    buttonPlusOrder[i].classList.toggle("hideShow");
    buttonLessOrder[i].classList.toggle("showHide");
    containersSubitemOrder[i].classList.toggle("hideShow");

  })
}



const openToggleSubitemOrder2 = document.querySelectorAll(".openToggleSubitemOrder2");
const containersSubitemOrder2 = document.querySelectorAll(".containersSubitemOrder2");

for (let i = 0; i < openToggleSubitemOrder2.length; i++) {
  openToggleSubitemOrder2[i].addEventListener("click", function(){

    containersSubitemOrder2[i].classList.toggle("hideShow");

  })
}
*/


var containerOrders = document.getElementById("containerOrders");


  function getOrders(){
    $.ajax( "../App/Controller/Controller2.php", {
           type: 'post',
           async: false,
           data: {
             module: "getOrders"
                   },
           success: function(data){
            var data = jQuery.parseJSON(data);
            containerOrders.innerHTML  = "";
            for (var i = 0; i < data["runs"].length; i++) {
              createOrders(data["runs"][i]["id"],  data["runs"][i]["created_date"], i);
            }

            }
          })
   }
//Send many parameters DOM onclick
//'<div class="openToggleSubitemOrder" onclick="getJobs(\'' + i + '\',\'' + id + '\');" >' +

  function createOrders(idOrder, createdDate, numberOrder){
    containerOrders.innerHTML +=
    '<div class="containerItemsOrder">' +
      '<div class="itemOrder">' +
        '<h3>Order: '+ createdDate +'</h3>' +
        '<div class="openToggleSubitemOrder" onclick="showJobs(\'' + numberOrder  + '\');" >' +
          '<img  class="buttonPlusOrder"src="../2-2-Orders/Images/mas.png" alt="">' +
          '<img  class="buttonLessOrder"src="../2-2-Orders/Images/menos.png" alt="">' +
        '</div>' +
      '</div>' +
      '<div class="containersItemJob">' +
      '</div>' +
    '</div>'
    ;
    const buttonPlusOrder =  document.querySelectorAll(".buttonPlusOrder");
    buttonPlusOrder[numberOrder].style.display = "block";

    setTimeout(function() {
    getJobs(numberOrder, idOrder);
    }, 0)

    const containersItemJob =  document.querySelectorAll(".containersItemJob");
    containersItemJob[numberOrder].style.display = "none";

  }
var dataJob;
  function getJobs(numberOrder, idOrder){
    const containersItemJob =  document.querySelectorAll(".containersItemJob");
      containersItemJob[numberOrder].innerHTML = '';

      $.ajax( "../App/Controller/Controller2.php", {
             type: 'post',
             async: false,
             data: {
               module: "getOrdersContent",
               idOrder: idOrder
                     },
             success: function(data){
              var data = jQuery.parseJSON(data);
              dataJob =  data["jobs"];


              for (var i = 0; i < data["jobs"].length; i++) {
                  createJobs(numberOrder,   i);
              }
              }
            })
  }//

// number job  = numeerJob + 1;  y enviarlo como parametro en createContent con eel nombre de otra variablee;
var numberContainerJob = 0;
  function createJobs(numberOrder, numberJob){
    const containersItemJob =  document.querySelectorAll(".containersItemJob");

    containersItemJob[numberOrder].innerHTML +=
    '<div class="containerItemJob">' +
      '<div class="itemJob">' +
        '<h3>Job: ' +  (numberJob +1) +'</h3>' +
        '<div class="openToggleSubitemJob"  onclick="createContent(\'' + numberContainerJob + '\',\'' + numberJob + '\');" >' + //onclick="createContent(\'' + numberJob + '\',\'' + dataJob + '\');"
          '<img  class="buttonPlusJob"src="../2-2-Orders/Images/mas.png" alt="">' +
          '<img  class="buttonLessJob"src="../2-2-Orders/Images/menos.png" alt="">' +
        '</div>' +
      '</div>' +
      '<div class="containersItemsContent">' +
      '</div>' +

    '</div>'

    ;
    numberContainerJob  = numberContainerJob +1;


    const buttonPlusJob =  document.querySelectorAll(".buttonPlusJob");
    buttonPlusJob[numberOrder].style.display = "block";





    const containersItemsContent =  document.querySelectorAll(".containersItemsContent");
    containersItemsContent[numberJob].style.display = "none";


  }
  function createContent(numberContainerJob, numberJob){
    var itemPlus =  '<div class="openToggleSubitemContent">' +
                      '<img  class="buttonPlusContent"src="../2-2-Orders/Images/mas.png" alt="">' +
                      '<img  class="buttonLessContent"src="../2-2-Orders/Images/menos.png" alt="">' +
                    '</div>' ;

    const buttonPlusJob =  document.querySelectorAll(".buttonPlusJob");
    const buttonLessJob =  document.querySelectorAll(".buttonLessJob");
    const containersItemsContent =  document.querySelectorAll(".containersItemsContent");


    if (buttonPlusJob[numberContainerJob].style.display == "none" ) {
      buttonPlusJob[numberContainerJob].style.display = "block";
      buttonLessJob[numberContainerJob].style.display = "none";
      containersItemsContent[numberContainerJob].style.display = "none";

    }else {
      buttonPlusJob[numberContainerJob].style.display = "none";
      buttonLessJob[numberContainerJob].style.display = "block";
      containersItemsContent[numberContainerJob].style.display = "block";

      containersItemsContent[numberContainerJob].innerHTML = "";


        for(let key in dataJob[numberJob]) {
        //  alert("Quiero llorar");

          containersItemsContent[numberContainerJob].innerHTML +=
          '<div class="containerItemContent">' +
            '<div class="itemContent">' +
              '<h3>'+key+': ' +  dataJob[numberJob][key] +'</h3>' +
            '</div>' +
          '</div>'
          ;
        }
    }


  //



  }



  function showJobs(i){
    const buttonPlusOrder =  document.querySelectorAll(".buttonPlusOrder");
    const buttonLessOrder =  document.querySelectorAll(".buttonLessOrder");
    const containersItemJob =  document.querySelectorAll(".containersItemJob");

    if (buttonPlusOrder[i].style.display == "none" ) {
      buttonPlusOrder[i].style.display = "block";
      buttonLessOrder[i].style.display = "none";
      containersItemJob[i].style.display = "none";

    }else {
      buttonPlusOrder[i].style.display = "none";
      buttonLessOrder[i].style.display = "block";
      containersItemJob[i].style.display = "block";
    }
  }


</script>

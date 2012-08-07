<div class="container">
  <div class="header">
    <div class="header_elements">
      <div class="logo_container">
        <div>logo</div>
      </div>
      <div class="header_module">       
        <div class="top_menu_container">
             <ul>
               <li class="top_menu_li"><a href="<?php echo url_for('@signup'); ?>">Шинээр бүртгүүлэх</a></li>
               <li class="top_menu_li"><a href="#">Нэвтрэх</li>
               <li class="top_menu_li"><a href="#">Холбоо барих</li>
               <li class="top_menu_li"><a href="#">Журам</li>               
             </ul>
          <form action="" style="margin-top: 5px"><input type="text" name="search_bar" placeholder="Хайх" style="width: 75px"/><input type="button" value="GO"></form>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <ul id="nav" class="main_menu_ul">
        <a href="#"><li class="main_menu_li">Нүүр</li></a>
        <a href="#"><li class="main_menu_li">Бидний тухай</li></a>
        <a href="#"><li class="main_menu_li">Хүргэлтийн тухай</li></a>
        <a href="#"><li class="main_menu_li">Ачаа тээвэрлэх журам</li></a>
        <a href="#"><li class="main_menu_li">Мэдээ мэдээлэл</li></a>
        <a href="<?php echo url_for('showMyCargo') ?>"><li class="main_menu_li">Миний ачаа</li></a>        
      </ul>
    </div>
  </div>
  <div class="slide_show_container">
    <div class="slide_show_div">
      slider
    </div>
    <div class="search_module">
      <div class="search_box">
        <form action="" id="cargo_form" name="cargo_form" class="cargo_form">          
          <div>
            <label>Ачаа хайх</label><br />
            <input type="text" name="track_number" id="track_number_input" class="track_number_input"/>
          </div>
          <div style="width: 100%;padding: 10px 15px 10px 0px;float: right;text-align: right;">            
            <input type="button" name="track_search_button" id="track_search_button" style="width: 60px;" value="хайх"/>
          </div>
        </form>
      </div>
      <div class="login_box">
        <form action="/frontend_dev.php/membership/login" method="post" id="cargo_form" name="cargo_form" class="cargo_form">          
          <div>
            <label>Нэвтрэх</label><br />
            <input type="text" placeholder="username" name="login[username]" id="track_number_input" class="track_number_input"/>
            <input type="password" placeholder="password" name="login[password]" id="track_number_input" class="track_number_input"/>
          </div>
          <div style="width: 100%;float: right;text-align: right;">            
            <input type="submit" name="login_button" id="login_button" style="width: 60px;" value="GO"/>
          </div>
        </form>
      </div>
      
    </div>
  </div>
  <div class="content_container">
    <table class="content_table" cellspacing="0" cellpadding="0">
      <tr>
        <td class="left_column">
          <div class="lastest_module_container">
            <div>
              <div class="div_long_title">Сүүлийн үеийн мэдээ</div>          
                <div class="news_body"></div>
              <div class="read_more"><a href="#">Дэлгэрэнгүй...</a></div>
            </div>
          </div>
          <div class="content_seperator"></div>
          <div class="lastest_module_container">
            <div>
              <div class="div_long_title">Сүүлийн үеийн мэдээ</div>          
              <div class="news_body"></div>
              <div class="read_more"><a href="#">Дэлгэрэнгүй...</a></div>
            </div>
          </div>      
          <div class="content_seperator"></div>
        </td>        
        <td class="right_column">
          <div class="right_module_container">
            <div class="news_module">
              <div class="r_m_header"><h3><a href="#">Бусад нэмэлт мэдээлэл</a></h3></div>
              <div class="r_news_item">
                <div class="r_m_title">News 1</div>
                <div class="r_m_text">
                  <span>An automobile, autocar, motor car or car is a wheeled motor vehicle used for transporting passengers, which also carries its own engine or motor. Most definitions of the term specify that automobiles are designed </span></div>
                <div class="r_m_footer"><a href="#">Дэлгэрэнгүй</a></div>
              </div>
              <div class="r_news_item">
                <div class="r_m_title">News 1</div>
                <div class="r_m_text">
                  <span>An automobile, autocar, motor car or car is a wheeled motor vehicle used for transporting passengers, which also carries its own engine or motor. Most definitions of the term specify that automobiles are designed </span></div>
                <div class="r_m_footer"><a href="#">Дэлгэрэнгүй</a></div>
              </div>
            </div>
            <div class="custom_module">
              <div class="r_m_header"><h3><a href="#">Гаалийн тухай мэдээлэл</a></h3></div>
              <div class="r_m_text">
                <span>An automobile, autocar, motor car or car is a wheeled motor vehicle used for transporting passengers, which also carries its own engine or motor. Most definitions of the term specify that automobiles are designed </span>
                <span>An automobile, autocar, motor car or car is a wheeled motor vehicle used for transporting passengers, which also carries its own engine or motor. Most definitions of the term specify that automobiles are designed </span></div>
            </div>
          </div>

        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="review_module_container">
              
            <div class="review_item">Компанийн танилцуулга</div>
            <div class="review_item">Реклам</div>
            <div class="review_item">Компанийн танилцуулга</div>
            <div class="review_item">Реклам</div>
          </div>
        </td>
      </tr>
    </table>
    <div class="empty_div"></div>
  </div>

</div>

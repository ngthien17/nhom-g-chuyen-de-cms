// Đợi cho trang web tải hoàn toàn
$(document).ready(function () {
  // Xử lý sự kiện khi nút "Menu" được nhấn
  $("#menuButton").click(function () {
    // Thực hiện hành động khi nút "Menu" được nhấn
    alert("Menu button clicked");
    // Thêm mã JavaScript hoặc CSS tương ứng để hiển thị menu hoặc thực hiện hành động bạn mong muốn.
  });

  // Xử lý sự kiện khi nút "Search" được nhấn
  $("#searchButton").click(function () {
    // Thực hiện hành động khi nút "Search" được nhấn
    alert("Search button clicked");
    // Thêm mã JavaScript hoặc CSS tương ứng để hiển thị hộp tìm kiếm hoặc thực hiện hành động bạn mong muốn.
  });

  // Xử lý sự kiện khi nút "Account" được nhấn
  $("#accountDropdown").on("show.bs.dropdown", function () {
    // Thực hiện hành động khi menu tài khoản được mở
    alert("Account dropdown opened");
    // Thêm mã JavaScript hoặc CSS tương ứng để hiển thị menu tài khoản hoặc thực hiện hành động bạn mong muốn.
  });
});
$(document).ready(function () {
    // Kích hoạt dropdown
    $('.dropdown-toggle').dropdown();
});


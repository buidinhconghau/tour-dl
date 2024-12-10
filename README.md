
# Cài đặt code về máy cá nhân
### B1: clone code trên git
### b2: mở terminal, cd vào thư mục
chạy: valet link csdlhdnd(tên miền)
mở notepad run adm thay (thêm) tên mền trong host
### b3: tạo database (tạo trùng tên vs tên miền)
### b4: copy file env.examble thành 1 file env
chỉnh sửa localhost và db và password db
Vào app/providers/appserviceprovider.php comment toàn bộ code trong hàm boot lại
### b5: chạy lệnh composer install trong terminal
mở lại comment
### b6: sau đó chạy
php artisan key:generate
php artisan migrate:fresh --seed


# yêu cầu khi làm webstie


1: folder theme là folder chứa view website
   + chứa view\share hoặc những config khác
2 file css:
   + yêu cầu sử dụng laravle-mix để build css hoặc scss
   + run watch khi dev và run prod khi push lên
3 quy tắc đặt biến camelCase
   + ví dụ $post_category (bỏ) <=> $postCategory
4 yêu cầu hiển thị hình ảnh: bắt buộc include và sử dụng component sau:
   @include('Theme::general.components.image', [
      'src' => addWebp('/storage/3-large.jpg'), 
      'width' => '150px',
      'height' => '40px',
      'lazy'   => true,
      'title'  => ''
   ])

# sử dụng hàm addWeb để render ảnh đuôi .webp giúp tối ưu tải trang 
# ảnh ở khung nhìn đầu tiên sẽ được tải lazy

# các thuộc tính liên quan đến thuộc tính ví dụ:
   # input, button, a ... : bắt buộc có name và aria-label, ...
   + thêm đầy đủ các thuộc tính của những thẻ ví dụ như a, button, input, img...


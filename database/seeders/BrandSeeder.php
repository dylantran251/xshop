<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::insert([
            [
                'image' => 'ancungbatuyet.png',
                'name' => 'Ăn cùng Bà Tuyết',
                'status' => 1,
                'address' => 'Thôn Đoài, Đông Lỗ, Phổ Yên, Thái Nguyên',
                'hotline' => '0123455789',
                'description' => 'Hãy mua hàng của chúng tôi vì chúng tôi cam kết mang đến cho bạn trải nghiệm mua sắm tốt nhất. 
                Chúng tôi tự hào về chất lượng sản phẩm chất lượng cao và dịch vụ chăm sóc khách hàng xuất sắc. 
                Sự tận tâm và khả năng hiểu được nhu cầu của khách hàng là ưu tiên hàng đầu của chúng tôi. 
                Chúng tôi luôn nỗ lực cải tiến và mang đến giá trị vượt trội cho mỗi sản phẩm bạn chọn. 
                Khi bạn mua hàng của chúng tôi, bạn không chỉ đang chọn một sản phẩm, mà còn đang chọn một cam kết về sự chất lượng và hài lòng.'
            ], 
            [
                'image' => 'anvatgaubeo.jpg',
                'name' => 'Đồ ăn vặt Gấu Béo',
                'status' => 1,
                'address' => '567 Phố Ẩm Thực, Quận 3, TP.HCM',
                'hotline' => '0912345678',
                'description' => 'Đồ ăn vặt Gấu Béo tự hào mang đến cho bạn những trải nghiệm vị giác tuyệt vời. 
                Với đa dạng các loại snack từ khắp nơi trên thế giới, chúng tôi đảm bảo bạn sẽ tìm thấy sự ưng ý cho bất kỳ khẩu vị nào.'
            ],
            [
                'image' => 'anvathappysnack.jpg',
                'name' => 'Ăn vặt Happy Snacks',
                'status' => 1,
                'address' => '789 Quận Vui Vẻ, Thành Phố Hạnh Phúc',
                'hotline' => '0888888888',
                'description' => 'Happy Snacks mang đến cho bạn những khoảnh khắc vui vẻ bên những chiếc bát đầy đồ ăn vặt. 
                Với sự kết hợp hoàn hảo giữa nguyên liệu chất lượng và kỹ thuật chế biến tinh tế, 
                chúng tôi cam kết mang đến những món ăn ngon và an toàn cho mọi thành viên trong gia đình.'
            ],
            [
                'image' => 'congphat.png',
                'name' => 'Công Phát',
                'status' => 1,
                'address' => '166/51/6 Phạm Phú Thứ, Phường 4, Quận 6, Thành phố Hồ Chí Minh',
                'hotline' => '0919 149 338',
                'description' => 'Chúng tôi cung cấp các loại bánh nướng như: Bánh Pía, Bánh Trung Thu, Bánh In, Bánh Dừa,... với nhiều hương vị, kích cỡ khác nhau, phù hợp cho các lựa chọn tiêu dùng của từng khách hàng.'
            ],
            [
                'image' => 'tq.png',
                'name' => 'Trung Quốc',
                'status' => 1,
                'address' => 'Trung Quốc',
                'hotline' => '1123 344 343',
                'description' => 'Những đồ ăn vặt Trung Quốc thường có hương vị rất đặc trưng và gắn liền với tuổi thơ của thế hệ 9x-2k'
            ],
        ]);
        
    }
}

<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::insert([
            [
                'image' => 'combosieutietkiem.png',
                'name' => 'Combo siêu tiết kiệm',
                'description' => 'Tận hưởng món ăn tuyệt ngon và đa dạng với combo siêu tiết kiệm. Đủ loại đồ ăn để bạn lựa chọn, đảm bảo bạn không phải cảm thấy đói một chút nào!',
                'status' => 1
            ], 
            [
                'image' => 'huongvivungmien.jpg',
                'name' => 'Hương vị vùng miền',
                'description' => 'Dấn thân vào hành trình khám phá vị ngon độc đáo từ các vùng miền khắp nơi. Tận hưởng sự đa dạng và phong cách ẩm thực đặc trưng mỗi nơi một vị.',
                'status' => 1
            ], 
            [
                'image' => 'thoibayconkhat.jpg',
                'name' => 'Thổi bay cơn khát',
                'description' => 'Cảm nhận cảm giác thật tươi mát khi thổi bay cơn khát với danh mục đồ uống đa dạng. Từ nước ép tự nhiên đến thức uống mát lạnh, bạn sẽ luôn tìm thấy lựa chọn phù hợp.',
                'status' => 1
            ], 
            [
                'image' => 'anvathealthy.jpg',
                'name' => 'Ăn vặt healthy',
                'description' => 'Dành cho những người yêu thích ẩm thực nhưng vẫn muốn giữ gìn sức khỏe. Với danh mục Ăn vặt healthy, bạn sẽ tận hưởng hương vị ngon lành và bổ dưỡng.',
                'status' => 1
            ], 
            [
                'image' => 'laidai.jpg',
                'name' => 'Ngồi lai rai',
                'description' => 'Nhâm nhi chút thời gian riêng tư với danh mục này. Ngồi lai rai, thư giãn và thưởng thức các món đồ ăn nhẹ nhàng và thú vị, giúp bạn thoát khỏi áp lực hàng ngày.',
                'status' => 1
            ], 
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'brand_id' => 2,
                'product_category_id' => 2,
                'image' => 'banhpialoaihaitrung-congphat1.jpg|banhpialoaihaitrung-congphat2.jpg|banhpialoaihaitrung-congphat3.jpg|banhpialoaihaitrung-congphat4.jpg',
                'name' => 'Bánh pía - Bao bì loại 2 trứng (550g)',
                'description' => 'Bánh pía lớn được hút bao bì chân không để bảo quản tốt hơn, phù hợp mua biếu, vận chuyển xa.
                Có hai nhân:
                + Đậu xanh sầu riêng 2 trứng.
                + Khoai môn sầu riêng 2 trứng.
                Quy cách đóng gói: Một bao bì gồm 04 bánh loại 02 trứng được hút chân không.
                Trọng lượng: 550 gram/ cây 04 bánh.
                Hạn sử dụng: 20 ngày kể từ ngày sản xuất (sản phẩm nằm trong bao bì). Sử dụng ngay khi vừa mở bao bì.',
                'status' => 1,
                'price' => 50000,
            ],
            [
                'brand_id' => 1,
                'product_category_id' => 5,
                'image' => 'nemnuongphen1.jpg|nemnuongphen2.jpg|nemnuongphen3.jpg|nemnuongphen4.jpg',
                'name' => 'NEM NƯỚNG PHÊN B.T làm từ bột mì - ĂN CÙNG BÀ TUYẾT',
                'description' => 'NEM NƯỚNG PHÊN làm từ bột mì - ĂN CÙNG BÀ TUYẾT
                Nem nướng phên sản xuất cực kì đảm bảo vệ sinh của ĂN CÙNG BÀ TUYẾT đây nha đồ ăn tuổi thơ mua ngay nào...
                ĐỒ ĂN VẶT Ở ĐÂU CHẢ GIỐNG NHAU? TẠI SAO PHẢI CHỌN ĂN VẶT CÙNG BÀ TUYẾT ?
                - Vì đó là sự yêu quý của fan dành tặng cho bà Tuyết, cho NMT Vlog !
                #Đến với ĂN CÙNG BÀ TUYẾT Các Bro như lạc vào thế giới ẩm thực của riêng mình vậy.
                Tại đây bạn như được lạc vào thế giới ăn vặt quốc dân với đủ các loại món siêu ngon.. tha hồ lựa chọn
                - Nhận hàng ngay sau 1-1,5 ngày đặt hàng nếu bạn ở thủ đô Hà Nội và bạn không phải chờ 2-3 ngày để thỏa mãn cơn thèm  ăn vặt ^^
                - An toàn, đảm bảo: Đồ ăn vặt của Bà Tuyết đều có giấy chứng nhận An toàn vệ sinh thực phẩm, Bao bì đóng hộp chắc chắn, đầy đủ ngày sản xuất và hạn sử dụng. Hàng được Ship đi bằng hộp Cát-tông cứng 3 lớp nên bạn yên tâm đồ ăn chắc chắn sẽ luôn còn mới và ngon lành cho đến khi bạn nhận được ^^
                - HSD: 6 tháng kể từ ngày sản xuất.
                - Xuất xứ: Việt Nam.
                Cảm ơn các bạn, chúc các bạn ngon miệng với đồ ăn của Bà Tuyết .
                À đừng quên là bác Tuyết còn nhiều loại đồ ăn khác nữa nha !!',
                'status' => 1,
                'price' => 3500,
            ],
            [
                'brand_id' => 3,
                'product_category_id' => 4,
                'image' => 'changacaytuxuyen1.jpg|changacaytuxuyen2.jpg|changacaytuxuyen3.jpg|changacaytuxuyen4.jpg',
                'name' => 'Chân gà cay Tứ Xuyên đủ vị',
                'description' => '- Thành phần: Chân gà, nước uống, muối, bột ngọt, hương liệu...
                - Hướng dẫn sử dụng: Dùng ăn trực tiếp
                - Hướng dẫn bảo quản: Nhiệt độ thường
                - Trọng lượng tịnh: 32g
                - Hạn sử dụng: 12 tháng kể từ ngày sản xuất
                - Chú ý: NGÀY IN TRÊN BAO BÌ LÀ NGÀY SẢN XUẤT NHÉ
                - Cơ sở sản xuất: CÔNG TY TNHH THỰC PHẨM NHIÊN LỢI
                - Địa chỉ sản xuất: Khu phát triển Đông Nguyên, thành phố Long Hải, tỉnh Phúc Kiến, Trung Quốc.
                - Đơn vị nhập khẩu: CÔNG TY TNHH MTV XUẤT NHẬP KHẨU HÀ SƠN
                - Địa chỉ: Đường Điện Biên, tổ 13, phường Cốc Lếu, thành phố Lào Cai, Tỉnh Lào Cai.
                Nếu các bạn muốn chọn vị hãy ib cho shop nha!',
                'status' => 1,
                'price' => 10000
            ],
            [
                'brand_id' => 1,
                'product_category_id' => 1,
                'image' => 'combonhatthong1.jpg|combonhatthong2.jpg|combonhatthong3.jpg',
                'name' => 'Chân gà cay Tứ Xuyên đủ vị',
                'description' => 'Combo NHẤT THỐNG : 30 GÓI NEM NƯỚNG PHÊN B.T +10 gói Snack SaShimi+BimBim Mái Tôn+5 Túi Sữa Chua tặng 12 gói đùi bò quay
                ĐỒ ĂN VẶT Ở ĐÂU CHẢ GIỐNG NHAU? TẠI SAO PHẢI CHỌN ĂN VẶT CÙNG BÀ TUYẾT ?
                - Vì đó là sự yêu quý của fan dành tặng cho bà Tuyết, cho NMT Vlog !
                #Đến với ĂN CÙNG BÀ TUYẾT Các Bro như lạc vào thế giới ẩm thực của riêng mình vậy.
                Tại đây bạn như được lạc vào thế giới ăn vặt quốc dân với đủ các loại món siêu ngon.. tha hồ lựa chọn
                - Nhận hàng ngay sau 1-1,5 ngày đặt hàng nếu bạn ở thủ đô Hà Nội và bạn không phải chờ 2-3 ngày để thỏa mãn cơn thèm ăn vặt  ^^
                - An toàn, đảm bảo: Đồ ăn vặt của Bà Tuyết đều có giấy chứng nhận An toàn vệ sinh thực phẩm, Bao bì đóng hộp chắc chắn, đầy đủ ngày sản xuất và hạn sử dụng. Hàng được Ship đi bằng hộp Cát-tông cứng 3 lớp nên bạn yên tâm đồ ăn chắc chắn sẽ luôn còn mới và ngon lành cho đến khi bạn nhận được ^^
                - HSD: 6 tháng kể từ ngày sản xuất.
                - Xuất xứ: Việt Nam.
                - Cơ sở đóng gói : Tây Mỗ, Nam Từ Liêm, Hà Nội
                Cảm ơn các bạn, chúc các bạn ngon miệng với đồ ăn của Bà Tuyết.
                À đừng quên là bác Tuyết còn nhiều loại đồ ăn khác nữa nha. !!',
                'status' => 1,
                'price' => 150000
            ],
        ]);
    }
}

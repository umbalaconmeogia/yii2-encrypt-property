# yii2-encrypt-db-field

## Mục đích

Thư viện này cung cấp giải pháp để mã hóa data trước khi lưu vào DB.

Để đảm bảo security cho thông tin hệ thống chúng ta vẫn thực hiện các giải pháp như đảm bảo security cho hệ thống, mã hóa trước khi gửi file database (dump). Tuy nhiên trên thực tế, thông tin vẫn có thể bị lộ khi file database bị sao chép và tuồn ra bên ngoài, chủ yếu do vấn đề con người.

Để đảm bảo security, các quy trình về bảo mật phải được áp dụng triệt để, nhưng điều đó không phải lúc nào cũng được thực hiện, nhất là trong các tổ chức, dự án nhỏ.

Một phương án để đề phòng việc này là bản thân thông tin phải được mã hóa trước khi lưu vào DB (và sẽ được giải mã trước khi được đọc ra). Tuy không phải là phương án đảm bảo an toàn tuyệt đối, nhưng nó cũng hạn chế được việc lộ data do sự bất cẩn và yếu kém của người làm việc.

## Giải pháp thực hiện và đặc điểm

* Giải pháp:

  * Trong DB, các field chứa thông tin nhạy cảm chỉ lưu thông tin đã được mã hóa; thông tin sẽ được giải mã mỗi khi cần sử dụng.
  * Việc mã hóa và giải mã được implement ở level model, được thực hiện một cách tự động, developer không phải ý thức về việc này.
  * Mật mã mã hóa có thể được lưu trong chương trình, hoặc do người dùng nhập vào (khi login).

* Lợi ích:

  * Database chỉ lưu thông tin mã hóa, giúp thông tin khó bị lộ ngay cả khi file data bị lộ ra ngoài. Chú ý là nếu mật khẩu mã hóa bị lộ thì phương án này không còn hiệu quả.
  
* Nhược điểm:

  * Không view/edit data trực tiếp bằng các câu lệnh database.
  
  * Tốc độ truy cập vào thông tin bị chậm lại.
  
  * Các field bị mã hóa sẽ yếu về vấn đề tìm kiếm, đòi hỏi phải implement phương án search riêng.
    * Không áp dụng được phương pháp search bằng câu lệnh SQL.
    * Không sử dụng được các phương án tìm kiếm do các framework cung cấp đã được implement trong generated code.
  
## Về thư viện này

* Được implement bằng ngôn ngữ PHP, dưới dạng trait để có thể nhúng vào các model class.

* Được kiểm chứng trên framework yii2.


## Cách sử dụng

### Thiết lập mật khẩu
TBD

### 

### 
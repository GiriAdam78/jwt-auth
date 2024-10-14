
## API Reference

#### Post User Baru
```http
   POST /api/register
```
|Key | Value| Description|
|:-------| :------| :---------|
|`name ` | `required`| `Harus Di Isi`|
|`email` | `required`| `Harus Di Isi`|
|`password`|`required`|`Harus Di Isi`|

#### Post User Baru
```http
   POST /api/login
```
|Key | Value| Description|
|:-------| :------| :---------|
|`name ` | `required`| `Harus Di Isi`|
|`email` | `required`| `Harus Di Isi`|
|`password`|`required`|`Harus Di Isi`|

#### Get all User

```http
  GET /api/user
```

| Key       | Value    |               
| :-------- | :------- | 
| `Accept`  | `application/json`
| `Content-Type` |`application/json`
| `Authorization`  | Bearer `<spasi>` Token

**IMPORTANT:**
>>> Jangan Lupa untuk merubah Url arahanya sesuai dengan Web server
Yang di Pakai ! Kalau Nggak bakalan error. 



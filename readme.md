# Passerby

- [Postman API Doc](https://documenter.getpostman.com/view/1015471/S1EH21nx)

## API

### Authenticate User

Authenticate user with refresh token in http-only cookies.

Example request

```http
POST /api/login HTTP/1.1
Host: localhost:8000
Accept: application/vnd.api+json
Content-Type: application/vnd.api+json

{
	"username":"user",
	"password":"user"
}
```

Example Response

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImViMzQyN2VjZTQ0MTRiMGQ0NmI5ZGUxODQ5MGZjM2ZmNzdkMjRmZjgzZjE4MGI3ZTM1Y2U2ODA2OTc1Zjg5MDhjZjQzNmY5MDkzMTQ2ZmEzIn0.eyJhdWQiOiIyIiwianRpIjoiZWIzNDI3ZWNlNDQxNGIwZDQ2YjlkZTE4NDkwZmMzZmY3N2QyNGZmODNmMTgwYjdlMzVjZTY4MDY5NzVmODkwOGNmNDM2ZjkwOTMxNDZmYTMiLCJpYXQiOjE1NTc5Nzk0MzksIm5iZiI6MTU1Nzk3OTQzOSwiZXhwIjoxNTU3OTg2NjM4LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.jgytkbnrg97V2wlQnpRgTyauMEjPjFdy-ZsYbzC_ma04HCvBRKG4PTMv9WQ8s6J7gIbAwUGyyjbTO8iuFL1UreoGmbt1C72oYdJwzdQq3K92OoO4HngxjGrQkcjRNjFJ-75e3n9atAHKWfmETsVF3x-BZrt3pk73H0aOIFj3pPIUKCcbSTGK9psbyN9bHs1xK-P9Wmsahpd3Z8wyD9gXRkniZLVy4laoFIu8RWdDRl9PuMwUrGnBMeoWvC0CQidmFHLweI0iZYjWShsML9qmH0fg8fwgqKJQpmwvhL-SjmWrgxhKafxVyjAxDrQBPioUaCTqDxX1-zlSgaWHEKXbxiVlkwZd4E0Btv1B5Wm6xpFNvq9sbMC1tR583B--qrkVHLxkr1dC9-9C-F2o3jnnzyevpk7Cs6jL0r8978u7yBqIk8_ykxfbxnnzeR73SOvTxHbvIQFlpX6-qRGm6uYKzr-TWckAQbwqxxwfksl0eMsM9WjQ7Tfj4g-mirJsSDMei856iflDB0oZDacrcHQpDYaz3wmByK2zdCmxnXq-TlQCYYvt9fLJ0c_1-P-GmFuKw8tqhGPztNYkFUl9b84TchI3vaiFEM5krbyVFirYt8pqWWD9WBYgj-d5gYAL-vULioCJd5frgNtRjiJxvBFpPSo2PtVVMESBrMFOsFqLgv0",
    "expires_in": 7199
}
```

Note :
- Enable when `refreshToken.cookie.httpOnly` value in `config/password` set to _true_

### Authenticate User - Refresh Token in Response Body

Authenticate user with refresh token included in response.

Example request

```http
POST /api/login HTTP/1.1
Host: localhost:8000
Accept: application/vnd.api+json
Content-Type: application/vnd.api+json

{
	"username":"user",
	"password":"user"
}
```

Example Response

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU1NjFjYzQxYWFjZWExNGIyM2Y4YmY1OWJiYjgzNDVhNWJjNjU1NmRmZmIwZTY5OWYwZjc3NDA1ZTI2MzhiM2VkMDg5ZTFkMGVjYTU2ZmJhIn0.eyJhdWQiOiIyIiwianRpIjoiZTU2MWNjNDFhYWNlYTE0YjIzZjhiZjU5YmJiODM0NWE1YmM2NTU2ZGZmYjBlNjk5ZjBmNzc0MDVlMjYzOGIzZWQwODllMWQwZWNhNTZmYmEiLCJpYXQiOjE1NTc5ODAyNTQsIm5iZiI6MTU1Nzk4MDI1NCwiZXhwIjoxNTU3OTg3NDU0LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.IhRPM8DOGiqD9PG24-WHj14Dk0MA-kZjp8pf8t_yko6reZHd6PVzwOKGrntpZXfNhF8Ua-9C_gsD8JaxOXoRq5WKIwcq2XiuIa1sNiuYjRtGHX9kbgczkSYkbmNTUlHvt-GQTADh5v3HwnWUlTKOr_qZUaoHaCg1ymA2hkvXWhDSvAkc4htYeWG38RgQRISDmhXAyUkO3yF8zCuNP_UtRpJDT12pGx9FW0gEJWEXOr4X-0U91CJ4GGBy3Z4Igpy-AyFivB7Zk5grtTvvpDJc_QiKi6UToDiSIDce0Nnyhu9jpC3Lgof64ah70TEW1BwyWtPGgwI7BFg27jAbq6GLwr_-fF-_cwWF9mA21HeePU7q25Lsxr-SflujL_CvcfnKBpilmpbXTuGUTAmF-9fpePY06U73rKGa9K8rlewaze3Kkf_NSG2R0LrcFKeJrKdwrNdqmxeS8Va1Lbp3CCn_sLL-WML1lQOuI9rHgoAT6QjSw_gxIldPmPAqEkAh5aagdI00YMvSAP03OVxtllLHSR0gDAuJk-EgNaDCBy4uxq2I8xiJbPdN6KKeCpjepSGsQ1YYNkodwcNh4P5MaHVahAF26VYN8quo0dXxMQ65XxGw6Xyf2NquM0PCQTnN39q6YxsNbHOpyBB9lHJk0vG-uugjo0icRW8Is2eyiDYMbsA",
    "refresh_token": "def5020085e818b57ce4820d959a3bd7160ab7460496d27be368821d0179033f763ff13fe5975c5888d98b50d7400a67aef4bda18f76c3042b34ac05080de4af9b162fc27227b5795546d74e91580b6420520b6919d3ec6d26240e8b85325f1e9843aa6d3a3c0477530b22338a4b5208c1a97f7f265acaabfaf3644daa01f6d691111f4d89374c518a36138f1e5fc80a87d41a880ac59a4999d4ed4831245d640d7142984d4f50229467b7614141116f1cf297cf13a2294ad3ab486e6cc6be2958abab70fcac627dabbe3c3f73a363de1843655bf1937f4afd6b7539ce694c9a9011bad97830bd8134966db489f9280b7cdc030b116ffcae8201fc887fa3e8f2ddfa7db507019521b94dd24fefcfac60c6cbc76cdee40b0d6869b642bc48b9168c98a63007cb85b4eabd8f1e68cb72ff764033cd9bb54df393e84fde9215a275d17af858723344b81dee097a25755feedba43ddffb595641c40907da3d761acce1",
    "expires_in": 7200
}
```

Note :
- Enable when `refreshToken.cookie.httpOnly` value in `config/password` set to _false_

### Refresh token - http-only

Request new token using refresh token in http-only cookies.

Example request

```http
POST /api/login/refresh HTTP/1.1
Host: localhost:8000
Accept: application/vnd.api+json
Content-Type: application/vnd.api+json

```

Example Response

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjhmMTViZmM0MGMwODlhNzZmN2M5ZTEyNThmZmQ2NWE3NDc1ZWIzNDg3MTNkZGJiYzI3NjFhMDAxZTg1NzNmMjNlZGE3ODcwYzljYWNmNmZjIn0.eyJhdWQiOiIyIiwianRpIjoiOGYxNWJmYzQwYzA4OWE3NmY3YzllMTI1OGZmZDY1YTc0NzVlYjM0ODcxM2RkYmJjMjc2MWEwMDFlODU3M2YyM2VkYTc4NzBjOWNhY2Y2ZmMiLCJpYXQiOjE1NTc5ODA1NjEsIm5iZiI6MTU1Nzk4MDU2MSwiZXhwIjoxNTU3OTg3NzYxLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.AZKfa8Wvkkrg7p_wLJOlmGEFIJxWOKgoRnpFkRYZRWoEgRZ0LZJP_VGHM5j144eu7nePOo1uNOKzJCDJPqXm_4ikFCW_7fEkBi78ewClwqp7_VlnCXmMgOuBWaVKO4guWn6xFFUuwECFs5rObbMl-zD6NCi6Ie1lxA1_nofBiPAJ7MekV4bth4X8Rl5-Mqa64ewdNnGri2dX0KxN9YWIpzOQau74vI2QlWY7FB2bAmTRS-IaM70K3r4PDBU3OT-zsUYA6KwV8Gv_gPCqxYAzMb7gkP9_AU_bSr9oPYAX8bgMiKGowhwysD-jiGCMbMQLJ1xdBpEgZA0uWoaBsD9dO2MHn7jUlpovQtZB--0zYO5aR1ALfjsTN5ZjqW4fY_2lixXvVcrUUChmPbDzbGXhR-04RjWSSSwkqERKtOgUS2ZFUVqOLo-Ktr581vFR5mxzv11Ufkl7_wr-n9Q9vfOlPJgln16uI77nBzSuyQNecc-W0x8PS4yYCfmlgrp22FjCve9l5ZYKij2FseBdAhCSLdhlarIpVqxuC1AeCt8iB6gpcMtNSksJJYQ0MinjUmPlVWToi_s7GIu6_eaDjjBn-OhV0M60kE6AqMiPhstwOBOqTjIrDYOdykkLxVtaTe2LD1YCGWL-sumZKH43bC8BuCfKexiH5Y1b4b41CxYqDAc",
    "expires_in": 7199
}
```

Note :
- Enable when `refreshToken.cookie.httpOnly` value in `config/password` set to _true_

### Refresh Token - query-string

Request new token using refresh token in request query-string.

Example request

```http
POST /api/login/refresh?refreshToken=def50200a7f8ff65af9397f759f04506dcfc9141e98b976108ab99c2f2a2d4ced1389bd4969423d4c2f5949cade8a7fa22af469ed6e980f3a41b81c293d321833b5eb26b3470e3405f0ad1c26490519138c96ff511806f4aece2f3534de6f201206f83a44a7a6698a40c43ebb96fe5462f7ed51cb734532c2255772354e15e57879930cc26f632f83399dd1d934dbe13c7c6210778809b54ff46118de1ebbffa4e03e92621476e742f100d968fcd34e47eac09a7af4b5c3c2785438f73619d0ebf3b7dd0c22462a88b81839aa323182bf2c78ddfc04547523d53b17c4291248533c2fe5ad896e4d2af46e4c48e7434a6dff787ab7d2e15e1cd27a211f94c65e6c66087e3dd6a20516edd4f26da6b1aac42b8b373c4cc23861ffceb7e89cdda088483d6cc32b7a6f042eedd340de4b470525fc83dabca329241d51e176595242cad4f609500060225a5e28fdd681882d10b5eae2ad1dbea193283bdb4bf127c8f4c HTTP/1.1
Host: localhost:8000
Accept: application/vnd.api+json
Content-Type: application/vnd.api+json

```

Example Response

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU1Y2I0MmQ2YzI1YjY0OWFkYjNhN2RhZWFmMGYyZmU0NDZiZDRjZDAxZDVlNWRiMTFjNmE3MDRhYjE4YzE0MGRiZGMzNGZhNGVhMDBhNjU1In0.eyJhdWQiOiIyIiwianRpIjoiZTVjYjQyZDZjMjViNjQ5YWRiM2E3ZGFlYWYwZjJmZTQ0NmJkNGNkMDFkNWU1ZGIxMWM2YTcwNGFiMThjMTQwZGJkYzM0ZmE0ZWEwMGE2NTUiLCJpYXQiOjE1NTc5ODA4NjgsIm5iZiI6MTU1Nzk4MDg2OCwiZXhwIjoxNTU3OTg4MDY4LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.UIhU1ihn3MmXVUQnn1q5Im2klH7_h1YJRLwZU3LXyItG6iUqvPLkqKSp9ZPfkAKKJzzkOupK4oJcPeXP6K3p9YUZxb3cPWNAGFjTORR8DreV-j0_792Fm-Ym6NWqAf65IUuRhnSNVJFkdsCQ5QzcS4zwjcvaYfaacrw3PG_nyGl5ejK2mcPI3cldUO3HpApiThPg-TZASMBwMUUC-1hnM7vNLM4epwe2_Vbj5IGfoIwoQT-6OD0-KinEpte0hruy6msKNKkmvvMunw8j8BMYbtq-p1QuIeDBOvtiI4O58jYDdJgplLIO6YxAFdcOWBp6KtF9DF0Mcf6UTCJkyaR2Vg-dskycMSxorrf02xYOMbXdGRemw9kT-eMylsoXUcZXPjufE83QL7ySIGm0oq5TsxZ4uCidcV4PejgL5bwvSD1q4iwZ4z4kxr4ef7WsEb905bZD6YvKtl6DVVf5_2etvphvPFddHjJSIGhVtlkJys_gNi5X5ZiB5WIvHhTmLQuIYW4xG5OPeu2Y_EiPAZ5jmFhTPQotwyFM6rt7bfKxaDuzv_bvi40YHTqZs-UYWMvJ7j3b2bz6ZrILXYCgTREdclbzreJUbtHCvLv1ymPiTXxMZVspuzWQ52EumhWIeoI-hidqZawKvaUP4BhnAc5q6UR6FNDbOzTQ410keSwm2BU",
    "refresh_token": "def502004576e6410900e8db0ba53f5637e76c3cbaca1f4fcfbfc128405349e32cf9d6e72154c1550e32e806a4971d2d0b3696c8bac99ba549ce34bea2274ff3918d28a79accb16d616a90664ffe032bf26929e51644bf9853782594a9612d9ca424becaf1d1bf5b97c63b1e05f7e75b5928f7ebaa0c468a225aef802132d85a93d033138bbea51591f8622692afc39722b14a3ce53f7b4f9603db9c4289cc4367ae01b1ce599fb64a771a2dbb77239498d18665d3051d6efc5d68b33d3ae900db93e7c0155e5703975ebe8302e1844ec6fd03f8e567e2dbe560eb8c6f7f2a0f709e598c5ca9f7bb6513b1ee92b6ea17a3fdb9e29a27bb0415816fa1e632ecbecf69bbea06436dc40be16f775f696fcc2b5bd0d2a5c61192ef651525eab566c5385e7243b57baaafd2109dd352234a7c752933107aa4325444744dc3a58366ce50bc6d711a062ea431dc2aaf1c66ef2548cd09974e8ec4b9930b215628c76feff4",
    "expires_in": 7200
}
```

Note :
- Enable when `refreshToken.cookie.httpOnly` value in `config/password` set to _false_

### Refresh Token - request-body

Request new token using refresh token provided in http request body.

Example request

```http
POST /api/login/refresh HTTP/1.1
Host: localhost:8000
Accept: application/vnd.api+json
Content-Type: application/vnd.api+json

{
"refreshToken":"def50200562b1bdb2f8f6908b4730ecbaf5ee946cd14c09d5d559f4aecf07fe426b19dcdd6ff7b403b73f933506ba645f979811d3ff77d1b4ef5ab25de993215fe46aa7960acdd123661c56069ccd90323b12cdfb3d2cdac3ce3d96cf5909cffee856210dc29ef19f7bb56cf26a3b7983df4daf8753a10495e41142bed30c2f7de8ee0460633d619da4d24d8c5d73d9598bdba6eaad1cbd34cf68f70191902bae9a3a321bb0816cfc1c2b9b30ba59808a43bb51cbec5b889aa6e133c81f6da8f11c2c617da47b9bd24d7b90f1e368e61a004799f14a48e5b92e6a0d1053460707335032e55dd736f73452f159f9864e02bee5a9dcfdc75b05a9ed2939eaa0e070e69b0b714dd3aa1cd65c9c02b2ba67860be28f1f77c25604f557cb6f3f10845364d3a25db70d0e61eca11881a26fbb0f1a846ada228b9f9082dd80f348d28b5aba746d9141df9b009477f25ee3c5b18f5b8a37af0739457632fb770b42a9a5bd0"
}
```

Example Response

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImE0MTI3YjJkZjNjNmNkZGNmMDMwODE3NTNhMDMyNzJmNmJjZDU3ODk5NDZmM2RjYWRhNDY3NzM1NmM4OThiYWJhNTBlZTJmZTU3NTk2NjhjIn0.eyJhdWQiOiIyIiwianRpIjoiYTQxMjdiMmRmM2M2Y2RkY2YwMzA4MTc1M2EwMzI3MmY2YmNkNTc4OTk0NmYzZGNhZGE0Njc3MzU2Yzg5OGJhYmE1MGVlMmZlNTc1OTY2OGMiLCJpYXQiOjE1NTc5ODEyMTksIm5iZiI6MTU1Nzk4MTIxOSwiZXhwIjoxNTU3OTg4NDE5LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.TlhzeNouP6NK6ucdJB4-hcQU7cFlIKItMsbY1e0pA7XtdC90UHuUea15Vu6ZDBLqVpnWGZTemi9VQHAl4R54ym0cqEIWKQtyX9qxFTADWDRbIeUlbOSULtTwmDCZdp-joCw9NlRiTy0YgfmROEem2SbZZAROxLF_zOkch4M4N2H1Ooxi8czNJ1nd4svE9vWjXBIlOPQKF3_fx1NRO5MVQsIsVXd5uqRkRRlJUuaqLXSs0-EQf-DrxFSA1OAJNuSzA8BBqa-7a7wixrGCV9vAGf3TQgt66RJP2Tt0g-HCJpPxQj4868bVfOOOpnKwMwvSJuo4bVO0EkS3MOvxTlm0E9w1DYtsFrZtLQxtejP7MKrq3HiVdUXDTIhhuzLye_KBn8RMKNZwTelthUUn0EYKyFne93xFBz1E-VLgZRtUJyxBCWtREHjfCtmsTInFszS3sYuBmpu3ztXtb_dydSmSMA_VSLCBXITT6fL3xckZWx3n6g6k6eWlOnvvuube2kQKXfXA0m4U5QFQDJ2M9eSsOC_K3PaIs0Lwouj7I53pjunZlR1Jn2Am_R1_8quxCZnTpSYdq4_DQ-VQ9T4CFCzM-j6YD9R0WzNwHQdldTkXVHWatNzDQF76yZxBJIbQ7CcJZs9EnJbPT_vuycHP1UgnqynfnmSiP1A63DuWJxso3lo",
    "refresh_token": "def50200927ad69eb342cf35c9ebfd7b5d53412afa66ec504d46c4d1eb9862772c7d3a390dfa975e355d8d429ac9abf71e8ee2988c51e46fa09ff2b77f16a36acc4eeabf5363e4bfe6fd5cf87558a280e764d6dc864217fc4efc2494cf1df582b8059c8f36d3f01a969502fd0c2394c5feb746a8fdd0795fde8da93a3e51ffc16c6d951b88932602fcbe6f59858079d88a8b91ff367820d9d8462ddbd6cd3de8755e69b8fcdc08a0e4bf4ffc34e2c60211752d573c90e5813483a359d9dfc179f77e4f7a064b61d4487c2742e0b0cf9314aefe52a53ee971c7e1f6d63f574d37904168d7a28552c1ec7ededf0c7a4235e13b36488776a31a9eb850819b1f8da9ae9b0a393046c97b5d2e10de317ad54f6799e7f2920c5d1c8207d51d38e83da686a1f0beafd2f69cf306adc978cf9c78e77bb3779cac15e5b472bd5d1d79e75daaad505390f8ebbd6709ee6eeba9e21652e1a51a08905eab2f4f2746da7f068cae",
    "expires_in": 7200
}
```

Note :
- Enable when `refreshToken.cookie.httpOnly` value in `config/password` set to _false_

### Get User

Example request

```http
GET /api/user HTTP/1.1
Host: localhost:8000
Accept: application/vnd.api+json
Content-Type: application/vnd.api+json

```

Example Response

```json
{
    "data": {
        "type": "users",
        "id": "9e556479-7003-5916-9cd6-33f4227cec9b",
        "attributes": {
            "username": "user",
            "name": "user",
            "email": "user@api.com"
        }
    },
    "link": "http://localhost:8000/api/user",
    "meta": {
        "copyright": "copyrightⒸ 2019 Onsigbaar",
        "author": [
            "person1",
            "person2"
        ]
    }
}
```

### Logout User

Example request

```http
POST /api/logout HTTP/1.1
Host: localhost:8000
Accept: application/vnd.api+json
Content-Type: application/vnd.api+json

```

Example Response

```json

```

Notes:
- Success response will return http status `204 No Content`
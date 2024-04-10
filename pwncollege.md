  # PWN.College

## 1.Send an HTTP request using curl
just easy task to send req
**Command:** curl 127.0.0.1:80
 ## <span style="color:Green;">Flag-pwn.college{wXgR3Up2JBkmG7ShCH647hgCFyL.dhjNyMDL5AzNzQzW}</span>

## 2.Send an HTTP request using nc
same thing
**Command:** nc 127.0.0.1 80 <<< $'GET / HTTP/1.1\r\nHost: 127.0.0.1\r\n'
\r(carriage return)\n(new line or line feed) for convenience
 ## <span style="color:Green;">Flag-pwn.college{Im8YPZySyeXoO6dE3ERWJiMRVIt.dljNyMDL5AzNzQzW}</span>
## 3.Send an HTTP request using python
same thing but need py file or not your wish
```
import requests
response=requests.get('http://127.0.0.1:80')
print(response.text)
```
 ## <span style="color:Green;">Flag-pwn.college{0JjyLiGt9aMuGuLXaCgCMjDaf6U.dBzNyMDL5AzNzQzW}</span>

 ## 4.Header using curl
 Dont forget uppercase H as tag not lowercase
 **Command:**  curl -H "Host: 1f52f23fc6fce3b4d90d0120e0a227a9" http://127.0.0.1
 # <span style="color:Green;">Flag-pwn.college{0-qrraf0IoCoJc9EI2ulPh1PFWy.dFzNyMDL5AzNzQzW}</span>
 ## 5.Header in nc
 using the format "http-version response-code response-phrase headers"
 **Command:** nc 127.0.0.1 80 <<< $'GET / HTTP/1.1\r\nHost: cba0b14c8146f9739e58e4240039a320\r\n'
  # <span style="color:Green;">Flag-pwn.college{gfFumu5Qxi77zFA2gGvqr5A88Vg.dJzNyMDL5AzNzQzW}</span>
## 6. header in py
send header while sending request
```
import requests
url = 'http://127.0.0.1'
headers = {'Host': '1826ac75b369ad6c8db700bbf0a3fb62'}
response = requests.get(url, headers=headers)
print(response.text)
```
## <span style="color:Green;">pwn.college{sGVsAuVko2PG8KcmmEIORp2fBna.dNzNyMDL5AzNzQzW}</span>

## 7.Set the path in an HTTP request using curl
Path is just after the "http://<fakeip:port/*path*"
**Command:** curl 127.0.0.1:80/6e97ae2299c63d4ae8a38726bf78d768
# <span style="color:Green;">Flag-pwn.college{EMc1QpZYvQ9P_pGcCq6SO9Y_jmU.dRzNyMDL5AzNzQzW}</span>

## 8. Set the path in an HTTP request using nc
Using get 
**Command** nc 127.0.0.1 80 <<< $'GET ad63be22450c644e10b8c75e16263c38 HTTP/1.1\r\nHost: 127.0.0.1\r\n'
## <span style="color:Green;">Flag-pwn.college{IXS6RQLiXRW_vhOOP4OOYJhrMgS.dVzNyMDL5AzNzQzW}</span>

## 9. Set the path in an HTTP requ20fde97418est usign python
```
import requests
url = 'http://127.0.0.1:80/9aeb7b950f2ea03fbfd18cd86d8459b4'
response = requests.get(url)
print(response.text)
```
## <span style="color:Green;">Flag-pwn.college{sLCjfDIclA05Bmhj-fnA4_21qaa.dZzNyMDL5AzNzQzW}</span>

## 10.URL encode a path in an HTTP request using curl
<span style="color:Red;">IDK if I  was suppose to create a program to encode the url but I did it manually
for eg space=%20,#=%23 and so on </span><br>
**Command:** curl 127.0.0.1:80/bb2eaeb7%20fde97418/4a2ec810%209c1673b8
## <span style="color:Green;">Flag-pwn.college{gOU9fHmyw5I7vc-IuoFvRfwEr7_.ddzNyMDL5AzNzQzW}</span>

## 11.URL encode a path in an HTTP request using nc
**Command:** nc 127.0.0.1 80 <<< $'GET /528ba321%204b026619/9a7a649a%20f675c4f0 HTTP/1.1\r\nHost: 127.0.0.1\r\n'
## <span style="color:Green;">Flag-pwn.college{Qs_pERY35s7QfWTBX7-hDRZ6VAh.dhzNyMDL5AzNzQzW}</span>

## 12.URL encode a path in an HTTP request using python
```
mport requests
url = 'http://127.0.0.1/bd16fa0c%208c15344c/8dfe0ef2%202bc183a5'
response = requests.get(url)
print(response.text)
```
## <span style="color:Green;">Flag-pwn.college{gZuzEJydZZrkKRKEyiq1SkTRaKv.dlzNyMDL5AzNzQzW}</span>


## 13.Specify an argument in an HTTP request using curl
**Command:**  curl 127.0.0.1:80/?a=de2dc657e4f90f42aac8540531cb10f7
## <span style="color:Green;">Flag-pwn.college{QY0vM3bocXUwbUl7uV9qxxReAJ6.dBDOyMDL5AzNzQzW}</span>

## 14.Specify an argument in an HTTP request using nc
**Command:**  nc 127.0.0.1 80 <<< $'GET /?a=526489d9f1935876d5efd576691f1031  HTTP/1.1\r\nHost: 127.0.0.1:80\r\n'
## <span style="color:Green;">Flag-pwn.college{o2Rqlp0UACw46Gi2pzLeZBFndUu.dFDOyMDL5AzNzQzW}</span>

## 15.Specify an argument in an HTTP request using Python
```
import requests
url = 'http://127.0.0.1/?a=c20f8f104da165ad729d9de3d1d0ff70'
response = requests.get(url)
print(response.text)
```
## <span style="color:Green;">Flag-pwn.college{wAjUQSxdruQj_nMC1PXaEvXpIhh.dJDOyMDL5AzNzQzW}</span>

## 16.Specify multiple arguments in an HTTP request using curl
 **Command:**  a=8835bc3af47d0ffb681194504c385878&b=ce0640c8%208e2fa9e7%2644824882%23dbc105fd"
pwn.college{k_RPdPBKC8UAw8BrGn_s1BZlgbM.dNDOyMDL5AzNzQzW}
## 17.
 **Command:**  nc 127.0.0.1 80 <<< $'GET /?a=cf10c10a6a8363e03708f753578eca8f&b=da739146%2094cb4fd0%26da85944c%2369895117  HTTP/1.1\r\nHost: 127.0.0.1:80\r\n'	
## <span style="color:Green;">Flag-pwn.college{MFgkfJc9cdcC1D70yw0IYcRZyUx.dRDOyMDL5AzNzQzW}

## 18.
```
import requests
url = 'http://127.0.0.1/?a=1e0564fab9295c5138ba0aef36c61650&b=8fb34c0b%20586362b4%26a2bd8943%23f2ec8075'
response = requests.get(url)
print(response.text)
```
## <span style="color:Green;">Flag-pwn.college{Qw5F173aGqFREw9JPiekOXup2v9.dVDOyMDL5AzNzQzW}

## 19
 **Command:** curl -d "a=798e05735ca3528743bf49546c306f11" 127.0.0.1:80
## <span style="color:Green;">Flag-pwn.college{YNI3yXjNjIP0X_JACctupkMTl5d.dZDOyMDL5AzNzQzW}

## 20
 **Command:** nc 127.0.0.1 80 <<< $'POST / HTTP/1.1\r\nHost: 127.0.0.1\r\nContent-Length: 34\r\nContent-Type: application/x-www-form-urlencoded\r\n\r\na=81aa73c68944c561f070880371b6869e'
## <span style="color:Green;">Flag-pwn.college{wvhm7tw1_G5osZjYJFpR9qRCsfd.ddDOyMDL5AzNzQzW}

## 21
```
import requests
url="http://127.0.0.1:80"
fd={'a','11a45ba914c4a3a7e56b134f98ff1073'}
res=requests.post(url,data=fd)
print(res)
```
## <span style="color:Green;">Flag-pwn.college{U6wdkoOWW_aODweexTcpiJUDZZH.dhDOyMDL5AzNzQzW}


## 22
 **Command:** curl -d "a=2bab776209578f22b717ef53e1ca56f7&b=0b83822f%20ce856d41%26741bb39d%233e363d24" 127.0.0.1:80
## <span style="color:Green;">Flag-pwn.college{092rOdFxxrpFqMeu_kM0IE7BfK9.dlDOyMDL5AzNzQzW}

## 23
 **Command:** nc 127.0.0.1 80 <<< $'POST / HTTP/1.1\r\nHost: 127.0.0.1\r\nContent-Length: 76\r\nContent-Type: application/x-www-form-urlencoded\r\n\r\na=82aa6d95243a90ca32c62fe3c0c47f70&b=1a13b068 e236a052%26bb5efb69%23ed535ef2'
## <span style="color:Green;">Flag-pwn.college{wWR0UF6Ljt6brhVBAH4CVSV_B70.dBTOyMDL5AzNzQzW}

## 24

import requests
url="http://127.0.0.1:80"
fd={'a':'11a45ba914c4a3a7e56b134f98ff1073','b':'48b8efae cec474e4&da630163#de9392ee'}
res=requests.post(url,data=fd)
print(res)
## <span style="color:Green;">Flag-pwn.college{Uor6zwfFOVfsAXlwoByVb_wGnIE.dFTOyMDL5AzNzQzW}

## 25 
 **Command:** curl -X POST -H "Content-Type: application/json" -d '{"a":"7fef0217ae5c4ec8d155df7cd311b123"}' http://127.0.0.1:80
## <span style="color:Green;">Flag-pwn.college{MsJc41LVdgle0xO7VtRrpCIWizs.dJTOyMDL5AzNzQzW}
## 26
 **Command:** nc 127.0.0.1 80 <<< $'POST / HTTP/1.1\r\nHost:127.0.0.1:80\r\nContent-Type: application/json\r\nContent-Length: 40\r\n\r\n{\"a\":\"f6f1691b9a974ab2517fc31e3797eb66"}'
## <span style="color:Green;">Flag-pwn.college{QCRkLiU97S6tgR6v3Jf7tzqhc-e.dNTOyMDL5AzNzQzW}
## 27
import requests

url = 'http://127.0.0.1:80'
headers = {'Content-Type': 'application/json'}
data = {'a': 'd4ef9d168c323ddd8f63b94a4b94bcfa'}

response = requests.post(url, headers=headers, json=data)

print(response.text)
## <span style="color:Green;">Flag-pwn.college{4m9RngDIHXWiuOFD3SKrOOkoRNM.dRTOyMDL5AzNzQzW}
## 28
 **Command:** curl -X POST -H "Content-Type:application/json" -d '{"a":"4df9b214f3c4dc854aff811990c7d746", "b":{"c":"a1155124","d":["d66257d0","6c600216 7d03dcc6&6196ae43#cb0233f9"]}}'  http://127.0.0.1:80
## <span style="color:Green;">Flag-pwn.college{82r55o8P5coYHm9vZ57Z5vmQoZr.dVTOyMDL5AzNzQzW}

## 29
 **Command:** echo -e "POST / HTTP/1.1\r\nHost: 127.0.0.1\r\nContent-Type: application/json\r\nContent-Length:124\r\n\r\n{\"a\": \"f6701e6ce005c877658e3ab26e7b516b\", \"b\": {\"c\": \"9e5f24a9\", \"d\": [\"ad1407f2\", \"be2dc691 6b2f44cb&e4987be4#2410af9a\"]}}" | nc 127.0.0.1 80
## <span style="color:Green;">Flag-pwn.college{0AoAkHmE0K-QrJx45J-QfRhyPuP.dZTOyMDL5AzNzQzW}
## 30
```
 import requests
url = 'http://127.0.0.1:80'
headers = {'Content-Type': 'application/json'}
data = {'a':'c5bb0ef45e0cb3626269d86da1fd0f39',"b":{"c":"971ca72c","d":["d01c63f7","3940e482 90030246&765e366f#34f375c8"]}}
response = requests.post(url, headers=headers, json=data)
print(response.text)
```
## <span style="color:Green;">Flag-pwn.college{EwRqM_FiNbx2-baOx4IeVonoFdf.ddTOyMDL5AzNzQzW}

## 31
 **Command:** curl -L http://127.0.0.1:80
## <span style="color:Green;">Flag-pwn.college{guE9lG7ulbMQdyptVbHaodCDav1.dhTOyMDL5AzNzQzW}


## 32
first 
```
GET /initial-page HTTP/1.1
Host: 127.0.0.1
```
after reading the redirection location
```
GET /0501ef6c86c061072a8b7e1471feb299 HTTP/1.1
Host: 127.0.0.1
```
## <span style="color:Green;">Flag-pwn.college{0LKfCy2cilH-Pyqzjlaxm__tT-o.dlTOyMDL5AzNzQzW}


## 33
```
import requests
url = 'http://127.0.0.1:80'
response = requests.get(url)
print(response.text)
```
## <span style="color:Green;">Flag-pwn.college{kwgRYBCWnS-pTL6AXJYwJqeA7LG.dBDMzMDL5AzNzQzW}

## 34
first for cookie token
```
curl -v --cookie "USER_TOKEN=Yes" 127.0.0.1:80
```
Then posting
```
curl -v --cookie "cookie=f29f6b021065b856870f19acd0e43307"  127.0.0.1:80
```
## <span style="color:Green;">Flag-pwn.college{81cQ89iS26Fhz5WSRl76uBqPoHa.dFDMzMDL5AzNzQzW}

## 35 
after nc ip
we can see Set-Cookie
so
Cookie:cookie=token
## <span style="color:Green;">Flag-pwn.college{sgru_pitRD-z5_I6uaFKXSiop7K.dJDMzMDL5AzNzQzW}

## 36
```
import requests
response1 = requests.get('http://127.0.0.1:80')
print(response1.text)
```
## <span style="color:Green;">Flag-pwn.college{Uo9sZsSd2dGlfMqyjABfqu6Ou9e.dNDMzMDL5AzNzQzW}
## 37
curl for multiple requests
```
curl -X GET http://127.0.0.1:80 -c a.txt 
curl  -X GET http://127.0.0.1:80/resource1 -b  a.txt -c a.txt
curl -X GET http://127.0.0.1:80/resource2 -b a.txt -c a.txt
curl -X GET http://127.0.0.1:80/resource3  -b a.txt -c a.txt
```
## 38.
nc
did this multiple times
nc 127.0.0.1 80
GET /resource1 HTTP/1.1
Host: 127.0.0.1
Cookie: session=eyJzdGF0ZSI6MX0.Zdj4Rg.HEPrIfklc16vml_I9tzo1GvrZlQ

## <span style="color:Green;">Flag-pwn.college{A5zVc9ljYrNt3wPEp3rrGL9xL8F.dVDMzMDL5AzNzQzW}

## 39.
```
import requests
url = 'http://127.0.0.1:80'
cookies = {}
response = requests.get(url)
cookies.update(response.cookies.get_dict())

for _ in range(3):
    response = requests.get(url, cookies=cookies)
    cookies.update(response.cookies.get_dict())
print(response.text)
```
## <span style="color:Green;">Flag-pwn.college{4ZOgfdrQpl3r7XYJg-lZ3PsH5j4.dZDMzMDL5AzNzQzW}
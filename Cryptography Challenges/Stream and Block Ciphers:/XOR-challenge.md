# XOR Challenge
We recieved a zip file with two python files "ciphers.py" and "generate.py".On generate.py a code was written where two removed messages were xored with a key and the output was saved on the ciphers file.We were also given a hint about one of the message (#What a wonderful welcome message to the CTF to test)  and (#Hint : Would it matter if my welcome message and flag share a word? Meh..who cares..I've used a strong key).
We know from the propert of xor that 
```
c1=msg1^key
c2=msg2^key
c1^c2=msg1^msg2
```
so if we can find either msg1 or msg2 we can find the key and the other message.So from the given hint I created a py program to try all the words on that sentence and xor it to find the key.
```
import itertools
def xor(a, b):
    return bytes(x ^ y for x, y in zip(a, b))
c1 = '2E0A193C0802117F0007451C3F23'
list=["What", "a", "wonderful", "welcome", "message", "to", "the", "CTF", "to" ,"test"]

for msg1 in list:
    c1_bytes = bytes.fromhex(c1)
    msg1_bytes = msg1.encode()
    key = xor(msg1_bytes, c1_bytes)
    key_str = key.decode()
    print("Key:",key_str,"/nWord:",msg1)
```
It produced the given output.
```
Key: ybxH 
Word:  What
Key: O 
Word:  a
Key: YewXmpw
l 
Word:  wonderful
Key: You_got 
Word:  welcome
Key: CojOiet 
Word:  message
Key: Ze 
Word:  to
Key: Zb| 
Word:  the
Key: m^_ 
Word:  CTF
Key: Ze 
Word:  to
Key: ZojH 
Word:  test
```
The most likely word is "You_got".From the hint we know that the length of the key is 15, we've found 7 of them and after assuming that the next char will be "_" we still need to find 7 more characters.For that I again created another brute force python file that prints all the possible combination on a file.I found that the uppercase and lowercase isn't significant either one gives the same value so it reduced the no of combinations.

After finding out the key which was not complete "you_got_the_ke" . I tried to find the flag using that but the flag was incomplete too 
Flag= flag{X0R_3ncry

The last char was missing and the cipher text had only 14 bytes of size so assuming the last character being 'y' because you_got_the_key makes more sense than any other thing.The new flag was "flag{X0R_3ncryp" which is still incomplete.

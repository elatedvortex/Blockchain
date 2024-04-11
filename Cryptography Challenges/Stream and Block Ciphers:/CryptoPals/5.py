def xor_strings(str1, str2):
    if len(str1) < len(str2):
        str1 *= (len(str2) // len(str1)) + 1
    elif len(str2) < len(str1):
        str2 *= (len(str1) // len(str2)) + 1

    result = ""
    for i in range(len(str1)):
        result += chr(ord(str1[i]) ^ ord(str2[i]))
    return result

string1 = "Burning 'em, if you ain't quick and nimble I go crazy when I hear a cymbal"  
string2 = "ICE" 
result = xor_strings(string1, string2)
ans = result.encode().hex()
print(ans)

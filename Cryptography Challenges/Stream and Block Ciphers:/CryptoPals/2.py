def xord(hex_input1, hex_input2):
    int_input1 = int(hex_input1, 16)
    int_input2 = int(hex_input2, 16)
    
    result = int_input1 ^ int_input2
    hex_output = hex(result)[2:] 
    return hex_output

hex_input1 = "1c0111001f010100061a024b53535009181c"
hex_input2 = "686974207468652062756c6c277320657965"
hex_output = xord(hex_input1, hex_input2)   
print("Hex output:", hex_output)

from three_code import three_code
from four_code import four_code
from five_code import five_code

def codemaker(keys):

#    keys = [key % 12 for key in keys]
    keys = sorted(set(keys))
    length = len(keys)

    if length < 3:
        return keys

    if length == 3:
        return three_code(keys)
    
    if length == 4:
        return four_code(keys)

    if length == 5:
        return five_code(keys)
        

    return keys



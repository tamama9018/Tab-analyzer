from three_code import three_code
from four_code import four_code
from five_code import five_code
from rotate import rotate
from code_rename import code_rename

def codemaker(keys):

    keys = [key % 12 for key in keys]
    keys = sorted(set(keys))
    root = keys[0]
    length = len(keys)
    codenames = []

    if length < 3:
        return keys

    if length == 3:
        for keys in rotate(keys):
            codename = three_code(keys)
            if type(codename) is str:
                codenames += [codename]

    
    if length == 4:
        for keys in rotate(keys):
            codename = four_code(keys)
            if type(codename) is str:
                codenames += [codename]


    if length == 5:
        for keys in rotate(keys):
            codename = five_code(keys)
            if type(codename) is str:
                codenames += [codename]

    codenames = sorted(list(set(codenames)))
    codenames = [code_rename(codename) for codename in codenames]
    return codenames



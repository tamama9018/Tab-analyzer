from two_code import two_code
from three_code import three_code
from four_code import four_code
from five_code import five_code
from six_code import six_code
from rotate import rotate
from code_rename import code_rename
from code_rule import code_rule
from key_name_matching import number_to_char


def codemaker(keys):

    keys = [key % 12 for key in keys]
    keys = sorted(set(keys))
    root = keys[0]
    length = len(keys)
    codenames = []

    if length < 2:
        return keys

    if length == 2:
        for keys in rotate(keys):
            codename = two_code(keys)
            if type(codename) is str:
                codenames += [codename]

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

        root_codename = three_code(keys[1:])
        if type(root_codename) is str:      
            codenames += [f'{root_codename}/{number_to_char(root)}']

    if length == 5:
        for keys in rotate(keys):
            codename = five_code(keys)
            if type(codename) is str:
                codenames += [codename]

        root_codename = four_code(keys[1:])
        if type(root_codename) is str:      
            codenames += [f'{root_codename}/{number_to_char(root)}']

    if length == 6:
        for keys in rotate(keys):
            codename = six_code(keys)
            if type(codename) is str:
                codenames += [codename]

        root_codename = five_code(keys[1:])
        if type(root_codename) is str:      
            codenames += [f'{root_codename}/{number_to_char(root)}']   


    codenames = sorted(list(set(codenames)))
    codenames = code_rename(codenames)

    return codenames



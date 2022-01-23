from two_code import two_code
from three_code import three_code
from four_code import four_code
from five_code import five_code
from six_code import six_code
from rotate import rotate
from code_rename import code_rename
from code_rule import code_rule
from key_name_matching import number_to_char

codenames = []

def codemaker(keys):
    global codenames
    
    keys = [key % 12 for key in keys]
    keys = sorted(set(keys))
    root = keys[0]

    length = len(keys)


    if length < 2:
        return ''

    if length == 2:
        for ks in rotate(keys):
            omit = ks + [min(ks)+7]
            omit.sort()
            omit_code = three_code(omit)
            if type(omit_code) is str:
                codenames += [f'{omit_code}(omit5)']                        
            omit = ks + [min(ks)+4]
            omit.sort()
            omit_code = three_code(omit)
            if type(omit_code) is str:
                codenames += [f'{omit_code}(omit3)']              

    if length == 3:
        for ks in rotate(keys):
            codename = three_code(ks)
            if type(codename) is str:
                codenames += [codename]
            else:
                omit = ks + [min(ks)+7]
                omit.sort()
                omit_code = four_code(omit)
                if type(omit_code) is str:
                    codenames += [f'{omit_code}(omit5)']                        
                omit = ks + [min(ks)+4]
                omit.sort()
                omit_code = four_code(omit)
                if type(omit_code) is str:
                    codenames += [f'{omit_code}(omit3)']  

    if length == 4:
        for ks in rotate(keys):
            codename = four_code(ks)
            if type(codename) is str:
                codenames += [codename]
            else: 
                omit = ks + [min(ks)+7]
                omit.sort()
                omit_code = five_code(omit)
                if type(omit_code) is str:
                    codenames += [f'{omit_code}(omit5)']                        
                omit = ks + [min(ks)+4]
                omit.sort()
                omit_code = five_code(omit)
                if type(omit_code) is str:
                    codenames += [f'{omit_code}(omit3)']           

        root_codename = three_code(ks[1:])
        if type(root_codename) is str:      
            codenames += [f'{root_codename}/{number_to_char(root)}']
            

    if length == 5:
        for ks in rotate(keys):
            codename = five_code(ks)
            if type(codename) is str:
                codenames += [codename]
            else: 
                omit = ks + [min(ks)+7]
                omit.sort()
                omit_code = six_code(omit)
                if type(omit_code) is str:
                    codenames += [f'{omit_code}(omit5)']                        
                omit = ks + [min(ks)+4]
                omit.sort()
                omit_code = six_code(omit)
                if type(omit_code) is str:
                    codenames += [f'{omit_code}(omit3)']       
                        
        root_codename = four_code(ks[1:])
        if type(root_codename) is str:      
            codenames += [f'{root_codename}/{number_to_char(root)}']

    if length == 6:
        for ks in rotate(keys):
            codename = six_code(ks)
            if type(codename) is str:
                codenames += [codename]

        root_codename = five_code(ks[1:])
        if type(root_codename) is str:      
            codenames += [f'{root_codename}/{number_to_char(root)}']   

    codenames = sorted(list(set(codenames)))
    codenames = code_rename(codenames)

    return codenames



from key_name_matching import number_to_char

def two_code(keys):
    root = keys[0]
    top  = keys[1]

    if top - root == 7:
        return number_to_char(root) + '5'
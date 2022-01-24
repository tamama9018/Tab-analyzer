from deco import func_expander

@func_expander
def code_rename(code):

    code = code.replace('46', '4(6)')
    code = code.replace('26', '2(6)')
    code = code.replace('ma', 'm_a')
    code = code.replace('ga', 'g_a')
    code = code.replace('47', '4(7)')
    code = code.replace('27', '2(7)')
    code = code.replace('sus2(7)', '7sus2')
    code = code.replace('sus2M7', 'M7sus2')
    code = code.replace('sus4(7)', '7sus4')
    code = code.replace('sus4M7', 'M7sus4')
    code = code.replace('sus2(6)', '6sus2')
    code = code.replace('sus4(6)', '6sus4')
    
    return code
    














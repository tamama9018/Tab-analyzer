from deco import func_expander

@func_expander
def code_rule(code):

    if 'dim' in code and '/' in code:
        return False

    return True

    
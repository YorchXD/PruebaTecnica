import React  from "react";
import Select from "react-select";
//import PropTypes from "prop-types";


const Options = ({options, onDropdownChange}) => {
    return <div>
        <p>Categoria</p>
        <Select
            value = {options.value}         
            options = {options}
            onChange={onDropdownChange}
            defaultValue = {options.find((option) => {
                return option.value === 'TODOS';
              })}
        />
    </div>;
};

export default Options;
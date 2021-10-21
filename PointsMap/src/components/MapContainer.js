import React from 'react';
import Options from './Options';
import Map from './Map';
import {getOptions, getPois} from '../services/apiService';

class MapContainer extends React.Component
{
    constructor (props){
        super(props);
        this.state = { 
            options: [],
            isFech: true,
            pois: []
        };
    }

    async componentDidMount()
    {
        /*Obtiene todas las categorias desde la api y genera un listado de categorias para que se coloquen en el select*/
        let optionsAux = [{value : 'TODOS', label : 'TODOS'}];
        const options = await getOptions();
        options.categories.map((option) => optionsAux.push(option));

        /*Obtiene todos los puntos segun la categoria que se encuentre seleccionada (por defecto inicia con todos los puntos en el mapa)*/
        const pois = await getPois('TODOS');        

        /*Guarda los datos en state para ser reutilizados */
        this.setState({options: optionsAux, isFech: false, pois: pois});
    }

    /*Guarda la nueva categoria seleccionada por el usuario y solicita a la api que obtenga los puntos segun el filtro*/
    async onDropdownChange(data)
    {
        const pois = await getPois(data.value);  
        await this.setState({pois: pois});           
    }

    render()
    {
        if(this.state.isFech)
        {
            return 'Loading...';
        }

        return <div>
            <Options options={this.state.options} onDropdownChange = {this.onDropdownChange.bind(this)} />
            <hr/>
            <Map 
                pois={this.state.pois}
            />
        </div>;        
    }
}

export default MapContainer;


import React from 'react';
import {Map, InfoWindow, Marker, GoogleApiWrapper} from 'google-maps-react';

export class MapContainer extends React.Component {
    state = {
        showingInfoWindow: false,
        activeMarker: {},
        selectedPlace: {},
    };

    onMarkerClick = (props, marker, e) =>
        this.setState({
            selectedPlace: props,
            activeMarker: marker,
            showingInfoWindow: true
    });
 
    onMapClicked = (props) => {
        if (this.state.showingInfoWindow) 
        {
            this.setState({
                showingInfoWindow: false,
                activeMarker: null
            })
        }
    };

    render() 
    {
        return (
            <Map
                google={this.props.google}
                style={{width: '100%', height: '100%', position: 'relative'}}
                className={'map'}
                zoom={16}
                onClick={this.onMapClicked}
                initialCenter={{
                    lat: -33.4266707,
                    lng: -70.6202899
                }}
            >
                {
                    this.props.pois.pois.map((point) => <Marker
                        key= {point.id}
                        name={point.name}
                        position={{lat: parseFloat(point.latitude), lng: parseFloat(point.longitude)}}
                        onClick={this.onMarkerClick}/>
                    )
                }

                <InfoWindow
                    marker={this.state.activeMarker}
                    visible={this.state.showingInfoWindow}>
                    <div>
                        <h4>{this.state.selectedPlace.name}</h4>
                    </div>
                </InfoWindow>
            </Map>
        );
    }
}
 
export default GoogleApiWrapper({
  apiKey: ('AIzaSyDlFEW-63BwtkIXPoOw892Ia9U64mCOcqc')
})(MapContainer)